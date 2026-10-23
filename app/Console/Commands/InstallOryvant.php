<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use PDO;
use Throwable;

class InstallOryvant extends Command
{
    protected $signature = 'oryvant:install';

    protected $description = 'Configure MySQL, safely create the CMS tables, seed approved content and create the first administrator';

    public function handle(): int
    {
        if (! $this->input->isInteractive()) {
            $this->error('Run this installer interactively. It asks for your local MySQL settings.');

            return self::FAILURE;
        }
        $this->info('OryvantAI setup. Existing tables and content will not be reset.');
        $host = $this->ask('MySQL host', '127.0.0.1');
        $port = $this->ask('MySQL port', '3306');
        $database = $this->ask('MySQL database name', 'oryvantai_cms');
        $username = $this->ask('MySQL username', 'root');
        $password = $this->secret('MySQL password (press Enter if empty)') ?? '';
        $v = Validator::make(compact('host', 'port', 'database', 'username'), ['host' => ['required', 'regex:/^[a-zA-Z0-9.:-]+$/'], 'port' => 'required|integer|between:1,65535', 'database' => ['required', 'regex:/^[a-zA-Z0-9_]{1,64}$/'], 'username' => 'required|string|max:100']);
        if ($v->fails()) {
            foreach ($v->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }
        try {
            $pdo = new PDO('mysql:host='.$host.';port='.$port.';charset=utf8mb4', $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            $pdo->exec('CREATE DATABASE IF NOT EXISTS `'.$database.'` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
        } catch (Throwable $e) {
            $this->error('Could not connect to MySQL or create the database. Check that MySQL is running and that this account has the required access. Your environment has not been changed.');

            return self::FAILURE;
        }
        $file = base_path('.env');
        if (! File::exists($file)) {
            File::copy(base_path('.env.example'), $file);
        }
        $env = File::get($file);
        $values = ['APP_NAME' => 'OryvantAI', 'DB_CONNECTION' => 'mysql', 'DB_HOST' => $host, 'DB_PORT' => $port, 'DB_DATABASE' => $database, 'DB_USERNAME' => $username, 'DB_PASSWORD' => $password, 'DB_URL' => '', 'SESSION_DRIVER' => 'file', 'CACHE_STORE' => 'file', 'SESSION_LIFETIME' => '30'];
        foreach ($values as $key => $value) {
            $value = '"'.str_replace(['\\', '"', '$', "\r", "\n"], ['\\\\', '\\"', '\\$', '', ''], (string) $value).'"';
            $line = $key.'='.$value;
            $env = preg_match('/^'.preg_quote($key, '/').'=/m', $env) ? preg_replace_callback('/^'.preg_quote($key, '/').'=.*$/m', fn () => $line, $env) : $env."\n".$line;
        }
        File::put($file, $env);
        @chmod($file, 0600);
        Artisan::call('config:clear');
        config(['database.default' => 'mysql', 'database.connections.mysql.host' => $host, 'database.connections.mysql.port' => $port, 'database.connections.mysql.database' => $database, 'database.connections.mysql.username' => $username, 'database.connections.mysql.password' => $password, 'database.connections.mysql.url' => null]);
        DB::purge('mysql');
        if (! config('app.key')) {
            $this->call('key:generate', ['--force' => true]);
        }
        if ($this->call('migrate', ['--force' => true]) !== 0) {
            return self::FAILURE;
        }
        if ($this->call('db:seed', ['--force' => true]) !== 0) {
            return self::FAILURE;
        }
        $this->call('storage:link');
        $this->call('view:clear');
        if (! User::where('role', 'administrator')->where('is_active', true)->exists()) {
            if ($this->call('oryvant:admin') !== self::SUCCESS) {
                $this->error('Database setup is complete, but administrator creation needs attention. Run oryvant:admin with an unused email address.');

                return self::FAILURE;
            }
        }
        $this->info('Setup complete. Visit '.url('/admin/login').' to sign in.');

        return self::SUCCESS;
    }
}
