<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('settings') ?? false;
    }

    public function rules(): array
    {
        $rules = [
            'brand_name' => ['required', 'string', 'max:100'], 'email' => ['required', 'email:rfc', 'max:254'],
            'website' => ['required', 'url:http,https', 'max:255'], 'footer_description' => ['required', 'string', 'max:500'],
            'contact_name' => ['nullable', 'string', 'max:120'], 'contact_role' => ['nullable', 'string', 'max:120'],
            'address' => ['nullable', 'string', 'max:600'], 'phone' => ['nullable', 'regex:/^[+0-9 ().-]{5,40}$/'],
            'privacy_notice' => ['required', 'string', 'max:12000'], 'privacy_version' => ['required', 'string', 'max:80'],
            'retention_days' => ['required', 'integer', 'min:1', 'max:3650'],
            'logo_upload' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048', 'dimensions:max_width=3000,max_height=3000'],
        ];
        foreach (['facebook', 'instagram', 'linkedin', 'youtube', 'x'] as $field) {
            $rules[$field] = ['nullable', 'url:http,https', 'max:255'];
        }

        return $rules;
    }
}
