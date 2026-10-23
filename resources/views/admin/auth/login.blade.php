<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Sign in | OryvantAI Admin</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome.min.css') }}">
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>

<body class="admin-app login-page">
    <main class="login-shell">
        <section class="login-intro" aria-labelledby="workspace-title">
            <a href="{{ route('Home.welcome') }}" class="admin-brand"><img
                    src="{{ asset('assets/images/logo-240.webp') }}" width="48" height="48"
                    alt=""><span>Oryvant<span class="brand-ai">AI</span></span></a>
            <div>
                <p class="eyebrow">CONTROLLED ACCESS. CLEAR OWNERSHIP.</p>
                <h1 id="workspace-title">Your website.<br>Your control.</h1>
                <p>Manage insights, conversations and your brand presence in one focused workspace.</p>
                <div class="login-principles"><span><i class="fa-solid fa-user-shield" aria-hidden="true"></i> Role
                        based access</span><span><i class="fa-solid fa-eye" aria-hidden="true"></i> Reviewable
                        changes</span></div>
            </div>
            <small>OryvantAI administration · Authorised team members only</small>
        </section>
        <section class="login-form-panel" aria-labelledby="login-title">
            <div class="login-mark"><i class="fa-solid fa-lock" aria-hidden="true"></i></div>
            <p class="eyebrow">TEAM ACCESS</p>
            <h2 id="login-title">Welcome back.</h2>
            <p class="muted">Sign in to your website workspace.</p>
            @if ($errors->any())
                <div class="notice error" role="alert">{{ $errors->first() }}</div>
            @endif
            @if (session('status'))
                <div class="notice success" role="status">{{ session('status') }}</div>
            @endif
            <form method="post" action="{{ route('admin.login') }}">
                @csrf
                <div class="field"><label for="email">Email address</label><input type="email" name="email"
                        id="email" value="{{ old('email') }}" autocomplete="username" maxlength="254" required
                        autofocus></div>
                <div class="field"><label for="password">Password</label>
                    <div class="password-field"><input type="password" name="password" id="password"
                            autocomplete="current-password" required><button type="button" class="icon-button"
                            data-password-toggle="password" aria-label="Show password"><i class="fa-solid fa-eye"
                                aria-hidden="true"></i></button></div>
                </div>
                <button type="submit" class="btn btn-primary full-width">Sign in securely <i
                        class="fa-solid fa-arrow-right" aria-hidden="true"></i></button>
            </form>
            <p class="login-help"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Access is provided by your
                administrator. Public registration is disabled.</p>
            <a class="subtle-link" href="{{ route('Home.welcome') }}">Back to website</a>
        </section>
    </main>
</body>

</html>
