<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AdminUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('users') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'], 'email' => ['required', 'email:rfc', 'max:254', Rule::unique('users')->ignore($this->route('user'))],
            'role' => ['required', Rule::in(array_keys(User::ROLES))], 'is_active' => ['required', 'boolean'],
            'password' => [$this->isMethod('post') ? 'required' : 'nullable', 'confirmed', Password::min(14)->mixedCase()->numbers()->symbols()],
        ];
    }
}
