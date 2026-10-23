<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $fillable = ['page', 'meta_title', 'meta_description', 'canonical_url', 'og_title', 'og_description', 'og_image', 'is_indexable'];

    protected function casts(): array
    {
        return ['is_indexable' => 'boolean'];
    }
}
