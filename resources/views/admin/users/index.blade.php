@extends('admin.layout')
@section('title', 'Users and roles')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">ACCESS MANAGEMENT</p>
            <h1>The right access for each person.</h1>
            <p>Administrators manage everything. Editors manage insights and SEO. Enquiry managers handle the private inbox.
            </p>
        </div><a class="btn btn-primary" href="{{ route('admin.users.create') }}">Add user</a>
    </div>
    <section class="panel">
        <div class="table-wrap" tabindex="0" role="region" aria-label="Records table">
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Last login</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $member)
                        <tr>
                            <td><strong>{{ $member->name }}</strong><small>{{ $member->email }}</small></td>
                            <td>{{ \App\Models\User::ROLES[$member->role] ?? 'Unassigned' }}</td>
                            <td><span
                                    class="badge {{ $member->is_active ? 'badge-green' : '' }}">{{ $member->is_active ? 'Active' : 'Disabled' }}</span>
                            </td>
                            <td>{{ $member->last_login_at?->format('j M Y, H:i') ?: 'Never' }}</td>
                            <td><a class="table-link" href="{{ route('admin.users.edit', $member) }}">Manage</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>{{ $users->links('admin.partials.pagination') }}
    </section>
@endsection
