<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('content') ?? false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'], 'slug' => ['required', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', 'max:180', Rule::unique('content_items')->ignore($this->route('content'))],
            'excerpt' => ['required', 'string', 'max:1200'], 'body' => ['required', 'string', 'max:100000'],
            'value' => ['nullable', 'string', 'max:255'], 'category' => ['nullable', 'string', 'max:100'], 'author' => ['nullable', 'string', 'max:120'],
            'icon' => ['required', Rule::in(['fa-shield-halved', 'fa-microchip', 'fa-database', 'fa-crosshairs', 'fa-chart-line', 'fa-brain', 'fa-diagram-project', 'fa-lock'])],
            'sort_order' => ['required', 'integer', 'min:0', 'max:9999'], 'status' => ['required', Rule::in(['draft', 'published'])],
            'published_at' => ['nullable', 'date'], 'image_alt' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:3072', 'dimensions:max_width=5000,max_height=5000'],
            'remove_image' => ['nullable', 'boolean'],
            'meta_title' => ['nullable', 'string', 'max:150'], 'meta_description' => ['nullable', 'string', 'max:320'],
            'canonical_url' => ['nullable', 'url:http,https', 'max:2048'], 'og_title' => ['nullable', 'string', 'max:150'],
            'og_description' => ['nullable', 'string', 'max:320'], 'og_image_upload' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048', 'dimensions:max_width=4000,max_height=4000'],
            'is_indexable' => ['required', 'boolean'],
        ];
    }
}
