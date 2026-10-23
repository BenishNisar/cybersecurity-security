<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="referrer" content="same-origin">
    <title>@yield('title', 'Overview') | OryvantAI Admin</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome.min.css') }}">
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>

<body class="admin-app">
    <a class="skip-link" href="#admin-main">Skip to content</a>
    <!-- Sidebar -->
    <aside class="admin-sidebar" id="admin-sidebar" aria-label="Administration">
        <a class="admin-brand" href="{{ route('admin.dashboard') }}"><img
                src="{{ asset('assets/images/logo-240.webp') }}" alt="" width="42"
                height="42"><span>Oryvant<span class="brand-ai">AI</span><small>WEBSITE WORKSPACE</small></span></a>
        <p class="nav-caption">MANAGE YOUR WEBSITE</p>
        <nav aria-label="Dashboard navigation">
            @php
                $links = [
                    ['Overview', 'admin.dashboard', 'fa-border-all', null],
                    ['Insights', 'admin.content.index', 'fa-file-lines', 'content'],
                    ['Contact enquiries', 'admin.enquiries.index', 'fa-inbox', 'enquiries'],
                    ['Page SEO', 'admin.seo.index', 'fa-magnifying-glass', 'content'],
                    ['Website settings', 'admin.settings', 'fa-sliders', 'settings'],
                    ['Users and roles', 'admin.users.index', 'fa-user-shield', 'users'],
                    ['Activity history', 'admin.activity', 'fa-clock-rotate-left', 'activity'],
                    ['Account and security', 'admin.account', 'fa-lock', null],
                ];
            @endphp
            @foreach ($links as [$label, $route, $icon, $ability])
                @if (!$ability || auth()->user()->can($ability))
                    <a href="{{ $route === 'admin.content.index' ? route($route, 'insights') : route($route) }}"
                        @class([
                            'nav-link',
                            'is-active' => request()->routeIs(str_replace('.index', '.*', $route)),
                        ]) @if (request()->routeIs(str_replace('.index', '.*', $route))) aria-current="page" @endif><i
                            class="fa-solid {{ $icon }}"
                            aria-hidden="true"></i><span>{{ $label }}</span></a>
                @endif
            @endforeach
        </nav>
        <div class="sidebar-bottom"><span class="status-dot"></span> Authorised access only<p>Clear ownership.
                Controlled publishing.</p><a href="{{ route('Home.welcome') }}" target="_blank"
                rel="noopener noreferrer">View website <i class="fa-solid fa-arrow-up-right-from-square"
                    aria-hidden="true"></i></a></div>
    </aside>
    <button type="button" class="sidebar-backdrop" data-close-sidebar aria-label="Close navigation" hidden></button>
    <div class="admin-workspace">
        <!-- Top Bar -->
        <header class="admin-topbar">
            <button type="button" class="icon-button mobile-menu" data-toggle-sidebar aria-expanded="false"
                aria-controls="admin-sidebar" aria-label="Open navigation"><i class="fa-solid fa-bars"
                    aria-hidden="true"></i></button>
            <div class="workspace-label"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>OryvantAI
                    <span class="muted">/ Administration</span></span></div>
            <div class="account-summary"><span class="avatar">{{ mb_substr(auth()->user()->name, 0, 1) }}</span>
                <div>
                    <strong>{{ auth()->user()->name }}</strong><small>{{ \App\Models\User::ROLES[auth()->user()->role] ?? 'User' }}</small>
                </div>
                <form method="post" action="{{ route('admin.logout') }}">@csrf<button class="icon-button"
                        aria-label="Sign out" title="Sign out"><i class="fa-solid fa-arrow-right-from-bracket"
                            aria-hidden="true"></i></button></form>
            </div>
        </header>
        <main id="admin-main" class="admin-main">
            <nav class="admin-breadcrumb" aria-label="Breadcrumb"><a
                    href="{{ route('admin.dashboard') }}">Workspace</a><span>/</span><span>@yield('title', 'Overview')</span>
            </nav>
            @if (session('status'))
                <div class="notice success" role="status"><i class="fa-solid fa-circle-check"
                        aria-hidden="true"></i><span>{{ session('status') }}</span></div>
            @endif
            @if ($errors->any())
                <div class="notice error" role="alert" tabindex="-1">
                    <div><strong>Please review these details.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
        <footer class="admin-footer"><span>© {{ date('Y') }} OryvantAI</span><span>Website content workspace <i
                    class="fa-solid fa-lock" aria-hidden="true"></i></span></footer>
    </div>
    <!-- Accessible Delete Confirmation -->
    <dialog id="confirm-dialog" class="confirm-dialog" aria-labelledby="confirm-title">
        <div class="confirm-icon"><i class="fa-solid fa-triangle-exclamation" aria-hidden="true"></i></div>
        <h2 id="confirm-title">Confirm deletion</h2>
        <p id="confirm-message">This action cannot be undone.</p>
        <div class="actions"><button type="button" class="btn btn-secondary" data-cancel-delete>Cancel</button><button
                type="button" class="btn btn-danger" data-approve-delete>Delete record</button></div>
    </dialog>
</body>

</html>
