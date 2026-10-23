@extends('Layout.layout')

@section('body_class', 'insights-page')

@section('title', 'OryvantAI | AI Powered Cybersecurity, SOC and SIEM Automation')
@section('description', 'Custom AI powered cybersecurity built around your existing tools, people and procedures. Explore controlled SOC workflows, SIEM automation and security analytics.')

@push('preloads')
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-network.webp') }}">
@endpush

@section('content')


     <!-- Insights Hero -->
        <main id="main">
            <section
                class="insights-hero dark-section"
                id="home"
                aria-labelledby="insights-title"
            >
                <div class="page-container">
                    <nav
                        class="insights-breadcrumb"
                        aria-label="Breadcrumb"
                    >
                        <a href="index.html">Home</a><span aria-hidden="true">/</span
                        ><span aria-current="page">Insights</span>
                    </nav>
                    <p class="eyebrow"><span aria-hidden="true"></span>ORYVANTAI INSIGHTS</p>
                    <h1 id="insights-title">
                        Practical thinking.<br /><span class="logo-gradient-text"
                            >Better security workflows.</span
                        >
                    </h1>
                    <p class="insights-lead">
                        Perspectives on security operations, evidence and controlled AI. Built
                        around the people responsible for decisions.
                    </p>
                </div>
            </section>
            <!-- Featured Insight -->
            <!-- Published Insights -->
            <section class="section light-section" id="insights-library">
                <div class="page-container">
                    <div class="section-heading"><p class="eyebrow">ORYVANTAI PERSPECTIVES</p><h2>Ideas for accountable security work.</h2></div>
                    <div class="insights-grid">
                        @forelse($articles as $article)
                            <article class="insights-card" id="{{ $article->slug }}">
                                @if($article->image)
                                    <div class="insights-card-image"><img src="{{ asset($article->image) }}" alt="{{ $article->image_alt }}" width="1280" height="720" loading="lazy" decoding="async"></div>
                                @endif
                                <div class="insights-card-copy">
                                    <p class="mono-label">{{ $article->category ?: 'INSIGHTS' }}</p>
                                    <h3>{{ $article->title }}</h3>
                                    <p>{{ $article->excerpt }}</p>
                                    <p class="insights-byline"><time datetime="{{ $article->published_at->toAtomString() }}">{{ $article->published_at->format('j F Y') }}</time></p>
                                    <a class="text-link" href="{{ $article->publicUrl() }}">Read insight <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                                </div>
                            </article>
                        @empty
                            <p>New insights will be published here. Please check back soon.</p>
                        @endforelse
                    </div>
                    <div class="public-pagination">{{ $articles->links('partials.pagination') }}</div>
                </div>
            </section>
            <section class="insights-cta">
                <div class="page-container">
                    <div class="contact-panel">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>PUT THE THINKING TO WORK
                            </p>
                            <h2>Start with one security<br />workflow that matters.</h2>
                            <p>Define the evidence, decision owner and operating boundary first.</p>
                            <div class="button-row">
                                <a
                                    class="button button-primary"
                                    href="contact.html"
                                    >Talk to an Expert<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i></a
                                ><a
                                    class="button button-secondary"
                                    href="services.html"
                                    >Explore Services<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-shield">
                                <i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <p>A direct conversation</p>
                            <a href="mailto:bilal@oryvantai.tech">bilal@oryvantai.tech</a
                            ><span>oryvantai.tech</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>



@endsection
