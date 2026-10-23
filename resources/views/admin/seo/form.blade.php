@extends('admin.layout')
@section('title', ucfirst($page) . ' SEO')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">PAGE METADATA</p>
            <h1>{{ ucfirst($page) }} SEO</h1>
            <p>Empty optional fields use existing page defaults.</p>
        </div><a href="{{ route('admin.seo.index') }}" class="btn btn-secondary">Back to page SEO</a>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('admin.seo.update', $page) }}">@csrf @method('put')
        <section class="panel form-panel">@include('admin.partials.seo-fields')<div class="actions space-top"><button
                    class="btn btn-primary">Save SEO</button></div>
        </section>
    </form>
@endsection
