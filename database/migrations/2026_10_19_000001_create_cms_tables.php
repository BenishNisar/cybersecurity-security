<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 30)->default('editor')->index();
            $table->boolean('is_active')->default(false);
            $table->unsignedInteger('session_version')->default(1);
            $table->boolean('must_change_password')->default(false);
            $table->timestamp('last_login_at')->nullable();
        });
        Schema::create('content_items', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20)->index();
            $table->string('title');
            $table->string('slug', 180)->unique();
            $table->text('excerpt');
            $table->longText('body');
            $table->string('value')->nullable();
            $table->string('icon', 80)->default('fa-shield-halved');
            $table->string('category', 100)->nullable();
            $table->string('author', 120)->nullable();
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->string('status', 20)->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->string('meta_title', 150)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url', 2048)->nullable();
            $table->string('og_title', 150)->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->boolean('is_indexable')->default(true);
            $table->timestamps();
            $table->index(['type', 'status', 'published_at']);
        });
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key', 80)->unique();
            $table->longText('value')->nullable();
            $table->timestamps();
        });
        Schema::create('page_seos', function (Blueprint $table) {
            $table->id();
            $table->string('page', 40)->unique();
            $table->string('meta_title', 150)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url', 2048)->nullable();
            $table->string('og_title', 150)->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->boolean('is_indexable')->default(true);
            $table->timestamps();
        });
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 120);
            $table->string('email', 254);
            $table->string('company', 160);
            $table->string('role', 120);
            $table->string('interest', 100);
            $table->text('message');
            $table->string('status', 30)->default('new')->index();
            $table->string('privacy_version', 80);
            $table->timestamp('consented_at');
            $table->timestamps();
        });
        Schema::create('enquiry_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enquiry_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->text('body');
            $table->timestamps();
        });
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('action', 80);
            $table->string('subject_type', 80)->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->timestamp('created_at')->useCurrent()->index();
        });
    }

    public function down(): void
    {
        foreach (['activity_logs', 'enquiry_notes', 'enquiries', 'page_seos', 'site_settings', 'content_items'] as $table) {
            Schema::dropIfExists($table);
        }
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'is_active', 'session_version', 'must_change_password', 'last_login_at']);
        });
    }
};
