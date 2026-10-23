<?php

namespace App\Console\Commands;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CreateAdministrator extends Command
{
    protected $signature = 'oryvant:admin {email? : Administrator login email} {--reset : Reset an existing administrator password}';

    protected $description = 'Create an administrator or reset an existing administrator with a generated temporary password';

    public function handle(): int
    {
        $email = Str::lower(trim($this->argument('email') ?: $this->ask('Administrator email', 'bilal@oryvantai.tech')));
        if (Validator::make(['email' => $email], ['email' => 'required|email:rfc|max:254'])->fails()) {
            $this->error('Enter a valid email address.');

            return self::FAILURE;
        }
        $existing = User::where('email', $email)->first();
        if ($existing && (! $this->option('reset') || $existing->role !== 'administrator')) {
            $this->error('An account already exists. Use --reset only for an existing administrator.');

            return self::FAILURE;
        }
        $password = Str::password(24);
        $user = DB::transaction(function () use ($existing, $email, $password): User {
            $user = $existing ?: new User;
            $user->forceFill(['name' => $existing?->name ?: 'OryvantAI Administrator', 'email' => $email, 'password' => Hash::make($password), 'role' => 'administrator', 'is_active' => true, 'must_change_password' => true, 'session_version' => ($existing?->session_version ?? 0) + 1, 'remember_token' => Str::random(60)])->save();
            ActivityLog::record($existing ? 'Administrator password reset through console' : 'Initial administrator created', $user);

            return $user;
        });
        $this->info('Administrator ready. Save the following details privately.');
        $this->line('Login URL: '.url('/admin/login'));
        $this->line('Email: '.$user->email);
        $this->line('Temporary password: '.$password);
        $this->warn('The password is shown only here. You must change it at the first login.');

        return self::SUCCESS;
    }
}
