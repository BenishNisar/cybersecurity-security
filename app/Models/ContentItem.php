<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ContentItem extends Model
{
    protected $fillable = ['type', 'title', 'slug', 'excerpt', 'body', 'value', 'icon', 'category', 'author', 'image', 'image_alt', 'sort_order', 'status', 'published_at', 'meta_title', 'meta_description', 'canonical_url', 'og_title', 'og_description', 'og_image', 'is_indexable'];

    protected function casts(): array
    {
        return ['published_at' => 'datetime', 'is_indexable' => 'boolean'];
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('status', 'published')->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function publicUrl(): string
    {
        return route('insights.show', $this->slug);
    }
}
