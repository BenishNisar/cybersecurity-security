@extends('admin.layout')
@section('title', 'Account and security')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">YOUR ACCOUNT</p>
            <h1>Keep your access secure.</h1>
            <p>Choose a unique password and keep your sign in details private.</p>
        </div>
    </div>
    <div class="editor-layout">
        <section class="panel">
            <h2>{{ auth()->user()->must_change_password ? 'Set your own password' : 'Change your password' }}</h2>
            <p class="field-help">At least 14 characters with uppercase, lowercase, a number and a symbol. Other sessions
                will be required to sign in again.</p>
            <form method="post" action="{{ route('admin.account.password') }}">@csrf @method('put')<div class="field">
                    <label for="current_password">Current password</label><input id="current_password" name="current_password"
                        type="password" autocomplete="current-password" required></div>
                <div class="field"><label for="password">New password</label><input id="password" name="password"
                        type="password" minlength="14" autocomplete="new-password" required></div>
                <div class="field"><label for="password_confirmation">Confirm new password</label><input
                        id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                        required></div><button class="btn btn-primary">Update password</button>
            </form>
        </section>
        <aside class="panel">
            <h2>Account details</h2>
            <dl>
                <dt>Name</dt>
                <dd>{{ auth()->user()->name }}</dd>
                <dt>Email</dt>
                <dd>{{ auth()->user()->email }}</dd>
                <dt>Role</dt>
                <dd>{{ \App\Models\User::ROLES[auth()->user()->role] }}</dd>
                <dt>Last sign in</dt>
                <dd>{{ auth()->user()->last_login_at?->format('j F Y, H:i') ?: 'Not recorded' }}</dd>
            </dl>
            <p class="field-help">Contact your administrator if your name, email or access needs to change.</p>
        </aside>
    </div>
@endsection
