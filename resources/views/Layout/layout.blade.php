<!DOCTYPE html>
<html
    lang="en"
    class="no-js"
>
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <meta
            name="referrer"
            content="strict-origin-when-cross-origin"
        />
        <meta
            name="theme-color"
            content="#07152F"
        />
        @include('partials.seo')
        <link
            rel="icon"
            href="{{ asset('assets/images/favicon.png') }}"
        />
        @stack('preloads')
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/fontawesome.min.css') }}"
        />
        @vite('resources/css/app.css')
        <!-- Existing Site JavaScript: deferred to preserve the current interactions -->
        <script
            defer
            src="{{ asset('assets/js/main.min.js') }}"
        ></script>

        <script
    defer
    src="{{ asset('assets/js/main.js') }}"
></script>
        @stack('styles')
    </head>
    <body class="@yield('body_class')">
        <a
            class="skip-link"
            href="#main"
            >Skip to content</a>

        <!-- Utility Bar -->
        <div class="topbar">
            <div class="page-container flex items-center justify-between">
                <p>
                    <i
                        class="fa-solid fa-shield-halved "
                        aria-hidden="true"
                    ></i>
                    INTELLIGENCE FOR ACCOUNTABLE SECURITY OPERATIONS
                </p>
                <a href="mailto:{{ $site['email'] }}"
                    >{{ $site['email'] }}
                    <i
                        class="fa-solid fa-arrow-up-right-from-square "
                        aria-hidden="true"
                    ></i></a>
            </div>
        </div>

        <!-- Header and Primary Navigation -->

        @php
    $navigationGroups = [
        [
            'label' => 'Solutions',
            'path' => 'solutions',
            'items' => [
                [
                    'title' => 'Security Intelligence Workbench',
                    'description' => 'Evidence and investigation',
                    'icon' => 'fa-fingerprint',
                    'anchor' => 'intelligence',
                ],
                [
                    'title' => 'Procedure & Response Studio',
                    'description' => 'Procedures and reviewed response',
                    'icon' => 'fa-shield-halved',
                    'anchor' => 'response',
                ],
                [
                    'title' => 'Learning & Reporting Workspace',
                    'description' => 'Learning and decision support',
                    'icon' => 'fa-chart-line',
                    'anchor' => 'learning',
                ],
            ],
        ],
        [
            'label' => 'Services',
            'path' => 'services',
            'items' => [
                [
                    'title' => 'AI Powered Cybersecurity',
                    'description' => 'Controlled intelligence',
                    'icon' => 'fa-brain',
                    'slug' => 'ai-powered-security',
                ],
                [
                    'title' => 'SOC Automation',
                    'description' => 'Analyst workflow assistance',
                    'icon' => 'fa-diagram-project',
                    'slug' => 'soc-automation',
                ],
                [
                    'title' => 'SIEM Automation',
                    'description' => 'Logs and validated queries',
                    'icon' => 'fa-database',
                    'slug' => 'siem-automation',
                ],
                [
                    'title' => 'Threat Detection',
                    'description' => 'Context and detection quality',
                    'icon' => 'fa-crosshairs',
                    'slug' => 'threat-detection',
                ],
                [
                    'title' => 'Security Analytics',
                    'description' => 'Trusted records into reporting',
                    'icon' => 'fa-chart-line',
                    'slug' => 'security-analytics',
                ],
            ],
        ],
        [
            'label' => 'Industries',
            'path' => 'industries',
            'items' => [
                [
                    'title' => 'Financial Services',
                    'description' => 'Investigation and evidence',
                    'icon' => 'fa-building-columns',
                    'anchor' => 'financial-services',
                ],
                [
                    'title' => 'Healthcare',
                    'description' => 'Sensitive access and incidents',
                    'icon' => 'fa-heart-pulse',
                    'anchor' => 'healthcare',
                ],
                [
                    'title' => 'Telecom',
                    'description' => 'Visibility and handovers',
                    'icon' => 'fa-tower-broadcast',
                    'anchor' => 'telecom',
                ],
                [
                    'title' => 'Operational Technology',
                    'description' => 'Operational safety and control',
                    'icon' => 'fa-industry',
                    'anchor' => 'operational-technology',
                ],
                [
                    'title' => 'Regulated Enterprises',
                    'description' => 'Defined requirements and scope',
                    'icon' => 'fa-building-shield',
                    'anchor' => 'regulated-enterprises',
                ],
                [
                    'title' => 'Managed Security Providers',
                    'description' => 'Existing team enablement',
                    'icon' => 'fa-network-wired',
                    'anchor' => 'managed-security-providers',
                ],
            ],
        ],
    ];
@endphp

<!-- Header and Primary Navigation -->
<header class="site-header">
    <div class="header-inner">
        <a
            class="brand"
            href="{{ url('/') }}"
            aria-label="OryvantAI home"
        >
            <img
                src="{{ asset($site['logo']) }}"
                width="42"
                height="42"
                alt=""
            >
            <span>@if($site['brand_name'] === 'OryvantAI')Oryvant<span class="brand-ai">AI</span>@else{{ $site['brand_name'] }}@endif</span>
        </a>

        <button
            type="button"
            class="mobile-toggle"
            aria-controls="primary-nav"
            aria-expanded="false"
        >
            <span class="menu-lines" aria-hidden="true"></span>
            <span class="sr-only">Open navigation</span>
        </button>

        <nav
            class="primary-nav"
            id="primary-nav"
            aria-label="Main navigation"
        >
            <div class="mobile-nav-heading">
                <span>Explore OryvantAI</span>
                <span>SECURITY + INTELLIGENCE</span>
            </div>

            <a
                href="{{ url('/') }}"
                class="nav-home"
                @if(request()->is('/')) aria-current="page" @endif
            >
                Home
            </a>

            @foreach($navigationGroups as $group)
                <div class="nav-group">
                    <button
                        type="button"
                        class="nav-dropdown-toggle"
                        aria-expanded="false"
                        aria-controls="menu-{{ $group['path'] }}"
                        @if(request()->is($group['path'], $group['path'].'/*'))
                            aria-current="page"
                        @endif
                    >
                        {{ $group['label'] }}
                        <i
                            class="fa-solid fa-chevron-down"
                            aria-hidden="true"
                        ></i>
                    </button>

                    <div
                        class="nav-dropdown menu-{{ $group['path'] }}"
                        id="menu-{{ $group['path'] }}"
                        hidden
                    >
                        <div class="menu-heading">
                            <span>{{ strtoupper($group['label']) }}</span>

                            <a href="{{ url('/'.$group['path']) }}">
                                View All {{ $group['label'] }}
                                <i
                                    class="fa-solid fa-arrow-right"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>

                        <div class="menu-grid">
                            @foreach($group['items'] as $item)
                                <a
                                    href="{{ $group['path'] === 'services'
                                        ? url('/services/'.$item['slug'])
                                        : url('/'.$group['path']).'#'.$item['anchor'] }}"
                                >
                                    <span class="menu-icon">
                                        <i
                                            class="fa-solid {{ $item['icon'] }}"
                                            aria-hidden="true"
                                        ></i>
                                    </span>

                                    <span>
                                        <strong>{{ $item['title'] }}</strong>
                                        <small>{{ $item['description'] }}</small>
                                    </span>

                                    <i
                                        class="fa-solid fa-arrow-right menu-arrow"
                                        aria-hidden="true"
                                    ></i>
                                </a>
                            @endforeach
                        </div>

                        <div class="menu-bottom">
                            Controlled AI. Clear accountability.

                            <a href="{{ url('/contact') }}">
                                Talk to an Expert
                                <i
                                    class="fa-solid fa-arrow-right"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <a
                href="{{ url('/company') }}"
                @if(request()->is('company', 'company/*'))
                    aria-current="page"
                @endif
            >
                Company
            </a> --}}

            <a
                href="{{ url('/insights') }}"
                @if(request()->is('insights', 'insights/*'))
                    aria-current="page"
                @endif
            >
                Insights
            </a>

            <a
                href="{{ url('/contact') }}"
                @if(request()->is('contact', 'contact/*'))
                    aria-current="page"
                @endif
            >
                Contact
            </a>

            <a
                class="button button-primary mobile-cta"
                href="{{ url('/contact') }}"
            >
                Talk to an Expert
                <i
                    class="fa-solid fa-arrow-up-right-from-square"
                    aria-hidden="true"
                ></i>
            </a>

            <p class="mobile-nav-note">
                Your tools. Your experience.<br>
                A clearer path from evidence to action.
            </p>
        </nav>

        <a
            class="button button-primary desktop-cta"
            href="{{ url('/contact') }}"
        >
            Talk to an Expert
            <i
                class="fa-solid fa-arrow-up-right-from-square"
                aria-hidden="true"
            ></i>
        </a>
    </div>
</header>
        <div
            class="nav-backdrop"
            hidden
        ></div>

        <!-- Main Content -->
 @yield('content')

        <!-- Footer -->
        <footer class="site-footer">
            <div class="page-container">
                <div class="footer-intro">
                    <a
                        class="brand"
                        href="{{ url('/') }}"
                        aria-label="OryvantAI home"
                        ><img
                            src="{{ asset($site['logo']) }}"
                            width="42"
                            height="42"
                            alt=""
                        /><span>@if($site['brand_name'] === 'OryvantAI')Oryvant<span class="brand-ai">AI</span>@else{{ $site['brand_name'] }}@endif</span></a>
                    <p>{{ $site['footer_description'] }}</p>
                    <a href="{{ url('/contact') }}"
                        >Start a conversation
                        <i
                            class="fa-solid fa-arrow-up-right-from-square "
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
                <div class="footer-grid">
                    <div class="footer-description">
                        <h2>Intelligence. With accountability.</h2>
                        <p>
                            Connect evidence, improve workflows and support the people responsible
                            for security decisions.
                        </p>
                        {{-- <a href="{{ $site['website'] }}"
                            >{{ parse_url($site['website'], PHP_URL_HOST) }}
                            <i
                                class="fa-solid fa-arrow-up-right-from-square "
                                aria-hidden="true"
                            ></i></a> --}}
                    </div>
                    <div>
                        <h2>Solutions</h2>
                        <ul>
                            <li><a href="{{ url('/solutions#intelligence') }}">Security Intelligence Workbench</a></li>
                            <li><a href="{{ url('/solutions#response') }}">Procedure &amp; Response Studio</a></li>
                            <li><a href="{{ url('/solutions#learning') }}">Learning &amp; Reporting Workspace</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2>Services</h2>
                        <ul>
                            <li><a href="{{ url('/services/ai-powered-security') }}">AI Powered Cybersecurity</a></li>
                            <li><a href="{{ url('/services/soc-automation') }}">SOC Automation</a></li>
                            <li><a href="{{ url('/services/siem-automation') }}">SIEM Automation</a></li>
                            <li><a href="{{ url('/services/threat-detection') }}">Threat Detection</a></li>
                            <li><a href="{{ url('/services/security-analytics') }}">Security Analytics</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2>Company</h2>
                        <ul>
                            <li><a href="{{ url('/#about') }}">About OryvantAI</a></li>
                            <li><a href="{{ url('/#approach') }}">Our Approach</a></li>
                            <li><a href="{{ url('/industries') }}">Industries</a></li>
                            <li><a href="{{ url('/insights') }}">Insights</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <h2>Contact</h2>
                        <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a>
                        <p>{{ $site['contact_name'] }}<br /><span>{{ $site['contact_role'] }}</span></p>
                        @if($site['address'])<p>{{ $site['address'] }}</p>@endif
                        @if($site['phone'])<p><a href="tel:{{ preg_replace('/[^+0-9]/', '', $site['phone']) }}">{{ $site['phone'] }}</a></p>@endif
                        @include('partials.social-links')
                        <span class="footer-control"
                            ><i
                                class="fa-solid fa-user-shield "
                                aria-hidden="true"
                            ></i>
                            People retain responsibility.</span>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© {{ date('Y') }} {{ $site['brand_name'] }}. All rights reserved.</p>
                    <div>
                        <button
                            type="button"
                            data-dialog="privacy-dialog"
                        >
                            Privacy</button><button
                            type="button"
                            data-dialog="cookie-dialog"
                        >
                            Cookie Preferences</button><a
                            href="{{ url('/') }}"
                            aria-label="Back to top"
                            ><i
                                class="fa-solid fa-arrow-up "
                                aria-hidden="true"
                            ></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Cookie Consent -->
        <aside
            class="cookie-banner"
            aria-label="Cookie choices"
            id="cookie-banner"
            hidden
        >
            <div>
                <p class="cookie-title">Your privacy. Your choice.</p>
                <p>
                    This page stores your preferences locally. Optional analytics and marketing are
                    off unless you choose otherwise.
                </p>
            </div>
            <div class="cookie-actions">
                <button
                    class="button button-primary"
                    id="accept-cookies"
                >
                    Accept All</button><button
                    class="button button-outline"
                    id="reject-cookies"
                >
                    Reject Non Essential</button><button
                    class="cookie-manage"
                    data-dialog="cookie-dialog"
                >
                    Manage Preferences
                </button>
            </div>
        </aside>

        <!-- Cookie Preferences Dialog -->
        <dialog
            id="cookie-dialog"
            class="preference-dialog"
            aria-labelledby="cookie-title"
        >
            <div class="dialog-header">
                <h2 id="cookie-title">Cookie Preferences</h2>
                <button
                    class="close-dialog"
                    aria-label="Close cookie preferences"
                >
                    ×
                </button>
            </div>
            <p>
                Choose how optional technologies may be used. This homepage currently includes no
                analytics or marketing scripts.
            </p>
            <form id="cookie-form">
                <div class="preference-row">
                    <div>
                        <h3>Necessary</h3>
                        <p>Session and security cookies support forms and sign in. Local storage remembers your optional cookie choices.</p>
                    </div>
                    <span class="always-on">Always on</span>
                </div>
                <label class="preference-row"
                    ><span
                        ><strong>Analytics</strong><span>Optional measurement, if configured in a future update.</span></span><input
                        type="checkbox"
                        name="analytics" /></label><label class="preference-row"
                    ><span
                        ><strong>Marketing</strong><span
                            >Optional campaign measurement, if configured in a future update.</span></span><input
                        type="checkbox"
                        name="marketing"
                /></label>
                <p
                    class="storage-message"
                    role="status"
                    hidden
                >
                    Your browser could not save preferences. Your choice will apply for this visit.
                </p>
                <button
                    class="button button-primary"
                    type="submit"
                >
                    Save Preferences
                </button>
            </form>
        </dialog>

        <!-- Privacy Dialog -->
        <dialog
            id="privacy-dialog"
            class="preference-dialog"
            aria-labelledby="privacy-title"
        >
            <div class="dialog-header">
                <h2 id="privacy-title">Website Privacy</h2>
                <button
                    class="close-dialog"
                    aria-label="Close privacy information"
                >
                    ×
                </button>
            </div>
            <div class="public-prose"><p>{{ $site['privacy_notice'] }}</p></div>
            <p>Notice version: {{ $site['privacy_version'] }}. Enquiries are reviewed against a retention period of {{ $site['retention_days'] }} days.</p>
            <h3>Hosting and server records</h3>
            <p>
                The eventual hosting service may process connection information and access logs. Its
                configuration, retention and applicable privacy terms must be confirmed by the site
                owner before launch.
            </p>
            <h3>Questions and preferences</h3>
            <p>
                Contact <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a>. You can
                reopen Cookie Preferences from the footer at any time.
            </p>
            <button class="button button-primary close-dialog">Close</button>
        </dialog>
        <noscript
            ><div class="noscript-note">
                JavaScript is off. All page content and FAQs remain available. Contact OryvantAI at
                {{ $site['email'] }}. No optional tracking is loaded.
            </div></noscript>
        @stack('scripts')


        <!-- OryvantAI Website Assistant -->
<aside
    class="orybot"
    id="orybot"
    aria-label="OryvantAI website assistant"
    hidden
>
    <section
        class="orybot-panel"
        id="orybot-panel"
        role="dialog"
        aria-modal="false"
        aria-labelledby="orybot-title"
        hidden
    >
        <header class="orybot-header">
            <div>
                <span class="orybot-eyebrow">YOUR WEBSITE GUIDE</span>
                <h2 id="orybot-title">OryvantAI Assistant</h2>
            </div>

            <button
                class="orybot-close"
                type="button"
                data-ory-close
                aria-label="Close assistant"
            >
                &times;
            </button>
        </header>

        <div class="orybot-content">
            <p class="orybot-welcome">
                Hi! What would you like to explore?
            </p>

            <div class="orybot-options" aria-label="Choose a topic">
                <button
                    type="button"
                    data-ory-topic="solutions"
                    data-url="{{ url('/solutions') }}"
                >
                    <i class="fa-solid fa-brain" aria-hidden="true"></i>
                    Solutions
                </button>

                <button
                    type="button"
                    data-ory-topic="services"
                    data-url="{{ url('/services') }}"
                >
                    <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                    Services
                </button>

                <button
                    type="button"
                    data-ory-topic="industries"
                    data-url="{{ url('/industries') }}"
                >
                    <i class="fa-solid fa-building-shield" aria-hidden="true"></i>
                    Industries
                </button>

                <button
                    type="button"
                    data-ory-topic="insights"
                    data-url="{{ url('/insights') }}"
                >
                    <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
                    Insights
                </button>

                <button
                    type="button"
                    data-ory-topic="contact"
                    data-url="{{ url('/contact') }}"
                >
                    <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                    Contact
                </button>

                <button type="button" data-ory-privacy>
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    Privacy
                </button>
            </div>

            <div class="orybot-answer">
                <div aria-live="polite" aria-atomic="true">
                    <h3 id="orybot-answer-title">
                        Start with one workflow.
                    </h3>

                    <p id="orybot-answer-text">
                        Explore our approach or tell us which security
                        workflow you want to improve.
                    </p>
                </div>

                <a id="orybot-action" href="{{ url('/contact') }}">
                    Talk to an Expert
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <p class="orybot-note">
                Please keep passwords and sensitive security data
                out of public enquiries.
            </p>
        </div>
    </section>

    <button
        class="orybot-launcher"
        id="orybot-launcher"
        type="button"
        aria-expanded="false"
        aria-controls="orybot-panel"
        aria-label="Open OryvantAI website assistant"
    >
        <span class="orybot-label">Need a hand?</span>

        <span class="orybot-art" aria-hidden="true">
            <svg
                viewBox="0 0 427 640"
                width="96"
                height="144"
                focusable="false"
            >
                <defs>
                    <!-- Separate the raised hand for animation. -->
                    <clipPath
                        id="orybot-hand-clip"
                        clipPathUnits="userSpaceOnUse"
                    >
                        <polygon
                            points="23,232 38,203 78,198 97,214
                                    110,234 107,264 88,290
                                    62,294 39,280 25,255"
                        />
                    </clipPath>

                    <mask
                        id="orybot-body-mask"
                        maskUnits="userSpaceOnUse"
                        x="0"
                        y="0"
                        width="427"
                        height="640"
                    >
                        <rect width="427" height="640" fill="white" />

                        <polygon
                            points="23,232 38,203 78,198 97,214
                                    110,234 107,264 88,290
                                    62,294 39,280 25,255"
                            fill="black"
                        />
                    </mask>
                </defs>

                <image
                    href="{{ asset('assets/images/robot.png') }}"
                    width="427"
                    height="640"
                    mask="url(#orybot-body-mask)"
                />

                <g class="orybot-hand">
                    <image
                        href="{{ asset('assets/images/robot.png') }}"
                        width="427"
                        height="640"
                        clip-path="url(#orybot-hand-clip)"
                    />
                </g>
            </svg>
        </span>
    </button>
</aside>



{{-- robots --}}


    </body>
</html>
