@extends('admin.layout')
@section('title', 'Insights')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">CONTENT MANAGEMENT</p>
            <h1>Insights</h1>
            <p>Manage articles, draft privately and publish when ready.</p>
        </div><a class="btn btn-primary" href="{{ route('admin.content.create', 'insights') }}"><i class="fa-solid fa-plus"
                aria-hidden="true"></i> New insight</a>
    </div>
    <section class="panel">
        <form class="filter-bar" method="get">
            <div class="search-field"><label class="sr-only" for="q">Search insights</label><input id="q"
                    name="q" value="{{ request('q') }}" maxlength="100" placeholder="Search by title"></div>
            <div><label class="sr-only" for="status">Publication status</label><select id="status" name="status">
                    <option value="">All statuses</option>
                    @foreach (['draft' => 'Draft', 'published' => 'Published'] as $key => $label)
                        <option value="{{ $key }}" @selected(request('status') === $key)>{{ $label }}</option>
                    @endforeach
                </select>
            </div><button class="btn btn-secondary">Filter</button><a href="{{ route('admin.content.index', 'insights') }}"
                class="subtle-link">Reset</a>
        </form>
        <div class="table-wrap" tabindex="0" role="region" aria-label="Records table">
            <table>
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td><strong>{{ $item->title }}</strong><small>/insights/{{ $item->slug }}</small></td>
                            <td><span
                                    class="badge {{ $item->status === 'published' ? 'badge-green' : '' }}">{{ ucfirst($item->status) }}{{ $item->status === 'published' && $item->published_at?->isFuture() ? ' · Scheduled' : '' }}</span>
                            </td>
                            <td>{{ $item->published_at?->format('j M Y') ?: 'Not published' }}</td>
                            <td>{{ $item->updated_at->format('j M Y') }}</td>
                            <td><a class="table-link" href="{{ route('admin.content.edit', ['insights', $item]) }}">Edit
                                    <span class="sr-only">{{ $item->title }}</span></a></td>
                    </tr>@empty<tr>
                            <td colspan="5" class="empty-state">No insights match your search.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $items->links('admin.partials.pagination') }}
    </section>
@endsection
