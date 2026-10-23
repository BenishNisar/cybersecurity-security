<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $page)
        <url>
            <loc>{{ $page === 'home' ? route('Home.welcome') : route('Home.' . $page) }}</loc>
        </url>
    @endforeach
    @foreach ($items as $item)
        <url>
            <loc>{{ $item->publicUrl() }}</loc>
            <lastmod>{{ $item->updated_at->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>
