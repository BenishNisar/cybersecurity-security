<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Models\ActivityLog;
use App\Models\ContentItem;
use App\Support\Media;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private function kind(string $kind): string
    {
        abort_unless($kind === 'insights', 404);

        return 'article';
    }

    private function check(string $kind, ContentItem $content): void
    {
        abort_unless($content->type === $this->kind($kind), 404);
    }

    public function index(Request $request, string $kind): View
    {
        $type = $this->kind($kind);
        $q = mb_substr((string) $request->query('q'), 0, 100);
        $query = ContentItem::where('type', $type);
        if ($q !== '') {
            $query->where('title', 'like', '%'.$q.'%');
        }
        if (in_array($request->query('status'), ['draft', 'published'], true)) {
            $query->where('status', $request->query('status'));
        }

        return view('admin.content.index', ['items' => $query->orderBy('sort_order')->latest('updated_at')->paginate(12)->withQueryString(), 'kind' => $kind]);
    }

    public function create(string $kind): View
    {
        $type = $this->kind($kind);

        return view('admin.content.form', ['item' => new ContentItem(['type' => $type, 'status' => 'draft', 'icon' => 'fa-shield-halved', 'sort_order' => 0, 'is_indexable' => true]), 'kind' => $kind]);
    }

    public function edit(string $kind, ContentItem $content): View
    {
        $this->check($kind, $content);

        return view('admin.content.form', ['item' => $content, 'kind' => $kind]);
    }

    private function data(ContentRequest $request): array
    {
        $data = $request->safe()->except(['image_upload', 'og_image_upload', 'remove_image']);
        if ($request->hasFile('image_upload')) {
            $data['image'] = Media::store($request->file('image_upload'));
        } elseif ($request->boolean('remove_image')) {
            $data['image'] = null;
        }
        if ($request->hasFile('og_image_upload')) {
            $data['og_image'] = Media::store($request->file('og_image_upload'));
        }
        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        return $data;
    }

    public function store(ContentRequest $request, string $kind): RedirectResponse
    {
        $content = ContentItem::create(['type' => $this->kind($kind)] + $this->data($request));
        ActivityLog::record('Created '.$content->status.' content', $content);

        return redirect()->route('admin.content.edit', [$kind, $content])->with('status', 'Content saved.');
    }

    public function update(ContentRequest $request, string $kind, ContentItem $content): RedirectResponse
    {
        $this->check($kind, $content);
        $content->update($this->data($request));
        ActivityLog::record('Updated '.$content->status.' content', $content);

        return back()->with('status', 'Content saved.');
    }

    public function destroy(string $kind, ContentItem $content): RedirectResponse
    {
        $this->check($kind, $content);
        ActivityLog::record('Deleted content', $content);
        $content->delete();

        return redirect()->route('admin.content.index',$kind)->with('status','Content deleted.');
    }
}
