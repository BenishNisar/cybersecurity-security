@extends('admin.layout')
@section('title', 'Activity history')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">ACCOUNTABILITY</p>
            <h1>A record of important changes.</h1>
            <p>Tracks account access and administrative changes without copying enquiry messages or passwords.</p>
        </div>
    </div>
    <section class="panel">
        <div class="table-wrap" tabindex="0" role="region" aria-label="Records table">
            <table>
                <thead>
                    <tr>
                        <th>Person</th>
                        <th>Action</th>
                        <th>Record</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($logs as $log)
                        <tr>
                            <td>{{ $log->user?->name ?: 'System or removed user' }}</td>
                            <td>{{ $log->action }}</td>
                            <td>{{ $log->subject_type ?: 'Workspace' }} {{ $log->subject_id ? '#' . $log->subject_id : '' }}
                            </td>
                            <td>{{ $log->created_at->format('j M Y, H:i') }}</td>
                    </tr>@empty<tr>
                            <td colspan="4" class="empty-state">No activity recorded yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>{{ $logs->links('admin.partials.pagination') }}
    </section>
@endsection
