@extends('Layout.layout')
@section('body_class', $item->type === 'service' ? 'services-page' : 'insights-page')
@section('title', $item->title . ' | OryvantAI')
@section('description', $item->excerpt)
@section('content')
    <main id="main">
        <!-- Content Hero -->
        <section class="services-hero dark-section">
            <div class="page-container">
                <nav class="breadcrumb" aria-label="Breadcrumb"><a href="{{ route('Home.welcome') }}">Home</a> / <a
                        href="{{ route($item->type === 'service' ? 'Home.services' : 'Home.insights') }}">{{ $item->type === 'service' ? 'Services' : 'Insights' }}</a>
                </nav>
                @if ($preview)
                    <p class="eyebrow">PRIVATE PREVIEW · {{ strtoupper($item->status) }}</p>
                @endif
                <p class="eyebrow">
                    {{ $item->type === 'service' ? 'ORYVANTAI SERVICES' : ($item->category ?: 'ORYVANTAI INSIGHTS') }}</p>
                <h1>{{ $item->title }}</h1>
                <p>{{ $item->excerpt }}</p>
                @if ($item->type === 'article')
                    <p>
                        @if ($item->author)
                            {{ $item->author }} ·
                        @endif{{ $item->published_at?->format('j F Y') }}
                    </p>
                @endif
            </div>
        </section>
        <!-- Reviewable Content -->
        <section class="section">
            <article class="page-container public-content">
                @if ($item->image)
                    <img class="public-cover" src="{{ asset($item->image) }}" alt="{{ $item->image_alt }}" width="1280"
                        height="720">
                @endif
                <div class="public-prose">
                    @foreach (preg_split('/\R\s*\R/', $item->body) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
                <a class="button button-primary" href="{{ route('Home.contact') }}">Discuss Your Requirement</a>
            </article>
        </section>
    </main>
@endsection
