@extends('admin.layout')
@section('title', 'Page SEO')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">SEARCH VISIBILITY</p>
            <h1>Every page, clearly described.</h1>
            <p>Control page metadata. Article SEO is managed within each insight.</p>
        </div><a class="btn btn-secondary" href="{{ route('sitemap') }}" target="_blank" rel="noopener noreferrer">View
            sitemap</a>
    </div>
    <section class="panel">
        <div class="table-wrap" tabindex="0" role="region" aria-label="Records table">
            <table>
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>SEO title</th>
                        <th>Indexing</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                        <tr>
                            <td><strong>{{ ucfirst($page) }}</strong><small>{{ $page === 'home' ? '/' : '/' . $page }}</small></td>
                            <td>{{ $records[$page]->meta_title ?? 'Uses page title' }}</td>
                            <td><span
                                    class="badge">{{ $records[$page]->is_indexable ?? true ? 'Index allowed' : 'Noindex' }}</span>
                            </td>
                            <td><a class="table-link" href="{{ route('admin.seo.edit', $page) }}">Edit SEO</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
