<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public const ROLES = ['administrator' => 'Administrator', 'editor' => 'Content Editor', 'enquiry_manager' => 'Enquiry Manager'];

    protected $fillable = ['name', 'email', 'password', 'role', 'is_active', 'session_version', 'must_change_password'];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return ['email_verified_at' => 'datetime', 'password' => 'hashed', 'is_active' => 'boolean', 'must_change_password' => 'boolean', 'last_login_at' => 'datetime'];
    }

    public function hasAccess(string $ability): bool
    {
        if (! $this->is_active) {
            return false;
        }

        return $this->role === 'administrator' || match ($ability) {
            'content' => $this->role === 'editor',
            'enquiries' => $this->role === 'enquiry_manager',
            'dashboard' => in_array($this->role, array_keys(self::ROLES), true),
            default => false,
        };
    }
}
