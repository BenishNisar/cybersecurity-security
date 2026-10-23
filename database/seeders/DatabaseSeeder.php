<?php

namespace Database\Seeders;

use App\Models\ContentItem;
use App\Models\PageSeo;
use App\Models\SiteSetting;
use App\Support\Site;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Site::DEFAULTS as $key => $value) {
            SiteSetting::firstOrCreate(['key' => $key], ['value' => $value]);
        }
        foreach (['home', 'solutions', 'services', 'industries', 'insights', 'contact'] as $page) {
            PageSeo::firstOrCreate(['page' => $page], ['is_indexable' => true]);
        }
        $data = json_decode(file_get_contents(database_path('seeders/content.json')), true, 512, JSON_THROW_ON_ERROR);
        foreach ($data['articles'] as $article) {
            $article['body'] = preg_replace('/[ \t]+/', ' ', $article['body']);
            ContentItem::firstOrCreate(['slug' => $article['slug']], ['type' => 'article', 'title' => $article['title'], 'excerpt' => $article['excerpt'], 'body' => $article['body'], 'category' => $article['category'], 'image' => $article['image'], 'image_alt' => '', 'status' => 'published', 'published_at' => now(), 'is_indexable' => true]);
        }
    }
}
