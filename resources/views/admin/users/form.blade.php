@extends('admin.layout')
@section('title', $member->exists ? 'Manage user' : 'Add user')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">USER ACCESS</p>
            <h1>{{ $member->exists ? 'Manage account access.' : 'Invite your team securely.' }}</h1>
            <p>Share initial passwords through a private channel. New and reset passwords require a change at next sign in.
            </p>
        </div><a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to users</a>
    </div>
    <form method="post" action="{{ $member->exists ? route('admin.users.update', $member) : route('admin.users.store') }}">@csrf
        @if ($member->exists)
            @method('put')
        @endif
        <section class="panel form-panel">
            <div class="form-grid">
                <div class="field"><label for="name">Full name</label><input id="name" name="name"
                        maxlength="120" value="{{ old('name', $member->name) }}" required></div>
                <div class="field"><label for="email">Email address</label><input id="email" name="email"
                        type="email" maxlength="254" value="{{ old('email', $member->email) }}" required></div>
                <div class="field"><label for="role">Role</label><select id="role" name="role">
                        @foreach (\App\Models\User::ROLES as $key => $label)
                            <option value="{{ $key }}" @selected(old('role', $member->role) === $key)>{{ $label }}</option>
                        @endforeach
                    </select></div>
                <div class="field"><label for="is_active">Account status</label><select id="is_active" name="is_active">
                        <option value="1" @selected(old('is_active', $member->is_active) == 1)>Active</option>
                        <option value="0" @selected(old('is_active', $member->is_active) == 0)>Disabled</option>
                    </select></div>
                <div class="field"><label
                        for="password">{{ $member->exists ? 'Reset password (optional)' : 'Initial password' }}</label><input
                        id="password" name="password" type="password" minlength="14" autocomplete="new-password"
                        @required(!$member->exists)><small>At least 14 characters, including uppercase, lowercase, a number and a
                        symbol.</small></div>
                <div class="field"><label for="password_confirmation">Confirm password</label><input
                        id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                        @required(!$member->exists)></div>
            </div><button class="btn btn-primary">Save user</button>
        </section>
    </form>
    @if ($member->exists && $member->id !== auth()->id())
        <section class="danger-zone">
            <div>
                <h2>Remove account</h2>
                <p>Removes this person’s dashboard access.</p>
            </div>
            <form method="post" action="{{ route('admin.users.destroy', $member) }}"
                data-confirm="Delete this user account permanently?">@csrf @method('delete')<button
                    class="btn btn-danger">Delete user</button></form>
        </section>
    @endif
@endsection
