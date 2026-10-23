<?php

namespace App\Http\Controllers;

use App\Models\ContentItem;
use App\Models\PageSeo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PublicContentController extends Controller
{
    private function show(string $type, string $slug): View
    {
        $item = ContentItem::where('type', $type)->published()->where('slug', $slug)->firstOrFail();

        return view('Home.content-detail', ['item' => $item, 'contentSeo' => $item, 'preview' => false]);
    }

    public function article(string $slug): View
    {
        return $this->show('article', $slug);
    }

    public function preview(ContentItem $content): View
    {
        return view('Home.content-detail', ['item' => $content, 'contentSeo' => $content, 'preview' => true]);
    }

    public function sitemap(): Response
    {
        $pages = collect(['home', 'solutions', 'services', 'industries', 'insights', 'contact'])->reject(fn ($page) => PageSeo::where('page', $page)->where('is_indexable', false)->exists());
        $items = ContentItem::where('type', 'article')->published()->where('is_indexable', true)->get(['type', 'slug', 'updated_at']);

        return response()->view('sitemap', compact('pages', 'items'), 200, ['Content-Type' => 'application/xml']);
    }
}
