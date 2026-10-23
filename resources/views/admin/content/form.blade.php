@extends('admin.layout')
@section('title', $item->exists ? 'Edit insight' : 'New insight')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">INSIGHTS</p>
            <h1>{{ $item->exists ? 'Edit your insight.' : 'Create a useful perspective.' }}</h1>
            <p>Keep claims accurate and content ready for review.</p>
        </div><a class="btn btn-secondary" href="{{ route('admin.content.index', 'insights') }}">Back to insights</a>
    </div>
    <form method="post" enctype="multipart/form-data"
        action="{{ $item->exists ? route('admin.content.update', ['insights', $item]) : route('admin.content.store', 'insights') }}">
        @csrf @if ($item->exists)
            @method('put')
        @endif
        <div class="editor-layout">
            <div>
                <section class="panel">
                    <h2>Article content</h2>
                    <div class="field"><label for="title">Title <span aria-hidden="true">*</span></label><input
                            id="title" name="title" value="{{ old('title', $item->title) }}" maxlength="255" required
                            data-slug-source></div>
                    <div class="field"><label for="slug">URL slug <span aria-hidden="true">*</span></label><input
                            id="slug" name="slug" value="{{ old('slug', $item->slug) }}" maxlength="180"
                            pattern="[a-z0-9]+(-[a-z0-9]+)*" required data-slug-target><small>Lowercase words separated by a
                            dash. Changing a published URL can break existing links.</small></div>
                    <div class="field"><label for="excerpt">Short introduction <span aria-hidden="true">*</span></label>
                        <textarea id="excerpt" name="excerpt" rows="3" maxlength="1200" required>{{ old('excerpt', $item->excerpt) }}</textarea>
                    </div>
                    <div class="field"><label for="body">Article content <span aria-hidden="true">*</span></label>
                        <textarea class="article-editor" id="body" name="body" rows="18" maxlength="100000" required>{{ old('body', $item->body) }}</textarea><small>Use plain text with an empty line between paragraphs. HTML is
                            displayed as text for safe publishing.</small>
                    </div>
                </section>
                <section class="panel">
                    <h2>Search and social sharing</h2>@include('admin.partials.seo-fields')
                </section>
            </div>
            <aside>
                <section class="panel">
                    <h2>Publishing</h2>
                    <div class="field"><label for="status">Status</label><select id="status" name="status">
                            @foreach (['draft' => 'Draft', 'published' => 'Published'] as $key => $label)
                                <option value="{{ $key }}" @selected(old('status', $item->status) === $key)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field"><label for="published_at">Publication date</label><input id="published_at"
                            name="published_at" type="datetime-local"
                            value="{{ old('published_at', $item->published_at?->format('Y-m-d\TH:i')) }}"><small>Website
                            timezone: {{ config('app.timezone') }}. Blank uses the current date when publishing. Future
                            dates schedule visibility.</small></div><button class="btn btn-primary full-width"
                        type="submit">Save insight</button>
                    @if ($item->exists)
                        <a class="btn btn-secondary full-width space-top" href="{{ route('content.preview', $item) }}"
                            target="_blank" rel="noopener noreferrer">Private preview</a>
                    @endif
                </section>
                <section class="panel">
                    <h2>Article details</h2>
                    <div class="field"><label for="category">Topic label</label><input id="category" name="category"
                            maxlength="100" value="{{ old('category', $item->category) }}"></div>
                    <div class="field"><label for="author">Author display name</label><input id="author"
                            name="author" maxlength="120" value="{{ old('author', $item->author) }}"><small>Optional. Use
                            an approved author name.</small></div><input type="hidden" name="icon"
                        value="fa-shield-halved"><input type="hidden" name="sort_order" value="0">
                </section>
                <section class="panel">
                    <h2>Featured image</h2>
                    @if ($item->image)
                        <img class="image-preview" src="{{ asset($item->image) }}" alt="Current featured image"><label
                            class="checkbox-label"><input name="remove_image" type="checkbox" value="1"> Remove current
                            image</label>
                    @endif
                    <div class="field"><label for="image_upload">Upload image</label><input id="image_upload"
                            name="image_upload" type="file" accept="image/png,image/jpeg,image/webp"><small>PNG, JPG or
                            WebP. Maximum 3 MB, 5000 × 5000 pixels.</small></div>
                    <div class="field"><label for="image_alt">Image description</label><input id="image_alt"
                            name="image_alt" value="{{ old('image_alt', $item->image_alt) }}" maxlength="255"></div>
                </section>
            </aside>
        </div>
    </form>
    @if ($item->exists)
        <section class="danger-zone">
            <div>
                <h2>Delete this insight</h2>
                <p>Removes the article and its public URL.</p>
            </div>
            <form method="post" action="{{ route('admin.content.destroy', ['insights', $item]) }}"
                data-confirm="Delete this insight permanently? Its public URL will stop working.">@csrf
                @method('delete')<button class="btn btn-danger">Delete insight</button></form>
        </section>
    @endif
@endsection
