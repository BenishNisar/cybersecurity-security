@php
    $seo = $contentSeo ?? $pageSeo;
    $metaTitle = $seo?->meta_title ?: trim($__env->yieldContent('title', 'OryvantAI | AI Powered Cybersecurity'));
    $metaDescription =
        $seo?->meta_description ?:
        trim(
            $__env->yieldContent(
                'description',
                'Custom AI powered cybersecurity built around your tools, people and procedures.',
            ),
        );
    $canonical = $seo?->canonical_url ?: url()->current();
    $ogTitle = $seo?->og_title ?: $metaTitle;
    $ogDescription = $seo?->og_description ?: $metaDescription;
    $ogImage = asset($seo?->og_image ?: $item->image ?? 'assets/images/social-cover.webp');
    $indexable = !($preview ?? false) && ($seo?->is_indexable ?? true);
@endphp
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="robots" content="{{ $indexable ? 'index, follow' : 'noindex, nofollow' }}">
<link rel="canonical" href="{{ $canonical }}">
<meta property="og:type" content="{{ isset($item) && $item->type === 'article' ? 'article' : 'website' }}">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
<meta name="twitter:image" content="{{ $ogImage }}">
