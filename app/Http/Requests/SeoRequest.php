<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('content') ?? false;
    }

    public function rules(): array
    {
        return ['meta_title' => ['nullable', 'string', 'max:150'], 'meta_description' => ['nullable', 'string', 'max:320'],
            'canonical_url' => ['nullable', 'url:http,https', 'max:2048'], 'og_title' => ['nullable', 'string', 'max:150'],
            'og_description' => ['nullable', 'string', 'max:320'], 'og_image_upload' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048', 'dimensions:max_width=4000,max_height=4000'],
            'is_indexable' => ['required', 'boolean']];
    }
}
