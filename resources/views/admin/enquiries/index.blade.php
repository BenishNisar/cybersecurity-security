@extends('admin.layout')
@section('title', 'Contact enquiries')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">PRIVATE INBOX</p>
            <h1>Conversations start here.</h1>
            <p>Review enquiries, track progress and keep internal notes private.</p>
        </div><span class="badge badge-blue"><i class="fa-solid fa-lock" aria-hidden="true"></i> Restricted access</span>
    </div>
    @if ($overdue)
        <div class="notice warning" role="status">{{ $overdue }} enquiries are older than the configured
            {{ $days }} day retention period. Review them and delete records that are no longer needed. No automatic
            deletion occurs.</div>
    @endif
    <section class="panel">
        <form class="filter-bar" method="get">
            <div class="search-field"><label class="sr-only" for="q">Search enquiries</label><input id="q"
                    name="q" maxlength="100" value="{{ request('q') }}" placeholder="Name, email or company"></div>
            <div><label class="sr-only" for="status">Status</label><select id="status" name="status">
                    <option value="">All statuses</option>
                    @foreach (['new' => 'New', 'in_progress' => 'In Progress', 'closed' => 'Closed'] as $key => $label)
                        <option value="{{ $key }}" @selected(request('status') === $key)>{{ $label }}</option>
                    @endforeach
                </select>
            </div><button class="btn btn-secondary">Filter</button><a class="subtle-link"
                href="{{ route('admin.enquiries.index') }}">Reset</a>
        </form>
        <div class="table-wrap" tabindex="0" role="region" aria-label="Records table">
            <table>
                <thead>
                    <tr>
                        <th>Contact</th>
                        <th>Interest</th>
                        <th>Status</th>
                        <th>Received</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $enquiry)
                        <tr>
                            <td><strong>{{ $enquiry->full_name }}</strong><small>{{ $enquiry->company }}</small></td>
                            <td>{{ $enquiry->interest }}</td>
                            <td><span
                                    class="badge {{ $enquiry->status === 'new' ? 'badge-blue' : '' }}">{{ ucfirst(str_replace('_', ' ', $enquiry->status)) }}</span>
                            </td>
                            <td>{{ $enquiry->created_at->format('j M Y') }}</td>
                            <td><a class="table-link" href="{{ route('admin.enquiries.show', $enquiry) }}">Review</a></td>
                    </tr>@empty<tr>
                            <td colspan="5" class="empty-state">No enquiries match your search.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>{{ $items->links('admin.partials.pagination') }}
    </section>
@endsection
