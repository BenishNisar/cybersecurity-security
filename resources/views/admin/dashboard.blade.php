@extends('admin.layout')
@section('title', 'Overview')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">WEBSITE OPERATIONS</p>
            <h1>A clear view of your workspace.</h1>
            <p>Welcome, {{ auth()->user()->name }}. Keep content current and conversations moving.</p>
        </div><span class="badge badge-blue"><span
                class="status-dot"></span>{{ \App\Models\User::ROLES[auth()->user()->role] }}</span>
    </div>
    <div class="stat-grid">
        @foreach ($counts as $label => $count)
            <article class="stat-card">
                <div><span>{{ $label }}</span><i
                        class="fa-solid {{ str_contains($label, 'enquiries') ? 'fa-inbox' : 'fa-file-lines' }}"
                        aria-hidden="true"></i></div><strong>{{ $count }}</strong><small>From your website
                    records</small>
            </article>
        @endforeach
    </div>
    <div class="overview-grid">
        <section class="panel">
            <div class="panel-heading">
                <div>
                    <p class="eyebrow">YOUR NEXT ACTION</p>
                    <h2>Keep the website useful.</h2>
                </div><i class="fa-solid fa-compass" aria-hidden="true"></i>
            </div>
            <div class="quick-actions">
                @can('content')
                    <a href="{{ route('admin.content.create', 'insights') }}"><span class="action-icon"><i
                                class="fa-solid fa-pen-to-square" aria-hidden="true"></i></span><span><strong>Publish an
                                insight</strong><small>Draft, review and share your perspective.</small></span><i
                            class="fa-solid fa-arrow-right" aria-hidden="true"></i></a><a
                        href="{{ route('admin.seo.index') }}"><span class="action-icon"><i class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"></i></span><span><strong>Review page SEO</strong><small>Manage metadata and
                                search visibility.</small></span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                @endcan
                @can('enquiries')
                    <a href="{{ route('admin.enquiries.index') }}"><span class="action-icon"><i class="fa-solid fa-inbox"
                                aria-hidden="true"></i></span><span><strong>Review enquiries</strong><small>Follow up with a
                                clear status and owner.</small></span><i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                @endcan
                @can('settings')
                    <a href="{{ route('admin.settings') }}"><span class="action-icon"><i class="fa-solid fa-sliders"
                                aria-hidden="true"></i></span><span><strong>Update brand settings</strong><small>Logo, contact
                                details and privacy notice.</small></span><i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                @endcan
            </div>
        </section>
        <aside class="control-panel"><span class="control-icon"><i class="fa-solid fa-shield-halved"
                    aria-hidden="true"></i></span>
            <p class="eyebrow">BUILT AROUND RESPONSIBILITY</p>
            <h2>Publish with intention.<br>Keep access clear.</h2>
            <p>Drafts remain private. Changes are recorded. Contact details stay within authorised roles.</p><a
                href="{{ route('admin.account') }}">Review account security <i class="fa-solid fa-arrow-right"
                    aria-hidden="true"></i></a>
        </aside>
    </div>
    @can('content')<section class="panel">
            <div class="panel-heading">
                <div>
                    <p class="eyebrow">CONTENT ACTIVITY</p>
                    <h2>Recently updated insights</h2>
                </div><a class="subtle-link" href="{{ route('admin.content.index', 'insights') }}">View all</a>
            </div>
            <div class="record-list">
                @forelse($recent as $item)
                    <a href="{{ route('admin.content.edit', ['insights', $item]) }}"><span><strong>{{ $item->title }}</strong><small>Updated
                                {{ $item->updated_at->diffForHumans() }}</small></span><span
                        class="badge {{ $item->status === 'published' ? 'badge-green' : '' }}">{{ ucfirst($item->status) }}</span></a>@empty
                    <p class="empty-state">No insights yet. Create your first draft when you are ready.</p>
                @endforelse
            </div>
    </section>@endcan
    @can('enquiries')<section class="panel">
            <div class="panel-heading">
                <h2>Latest enquiries</h2><a class="subtle-link" href="{{ route('admin.enquiries.index') }}">View inbox</a>
            </div>
            <div class="record-list">
                @forelse($enquiries as $enquiry)
                    <a href="{{ route('admin.enquiries.show', $enquiry) }}"><span><strong>{{ $enquiry->full_name }}</strong><small>{{ $enquiry->company }}
                                · {{ $enquiry->interest }}</small></span><span
                        class="badge">{{ ucfirst(str_replace('_', ' ', $enquiry->status)) }}</span></a>@empty<p
                        class="empty-state">No enquiries received yet.</p>
                @endforelse
            </div>
    </section>@endcan
@endsection
