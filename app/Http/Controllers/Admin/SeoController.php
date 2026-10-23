<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeoRequest;
use App\Models\ActivityLog;
use App\Models\PageSeo;
use App\Support\Media;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SeoController extends Controller
{
    public const PAGES = ['home', 'solutions', 'services', 'industries', 'insights', 'contact'];

    public function index(): View
    {
        return view('admin.seo.index', ['pages' => self::PAGES, 'records' => PageSeo::all()->keyBy('page')]);
    }

    public function edit(string $page): View
    {
        abort_unless(in_array($page, self::PAGES, true), 404);

        return view('admin.seo.form', ['item' => PageSeo::firstOrNew(['page' => $page], ['is_indexable' => true]), 'page' => $page]);
    }

    public function update(SeoRequest $request, string $page): RedirectResponse
    {
        abort_unless(in_array($page, self::PAGES, true), 404);
        $data = $request->safe()->except('og_image_upload');
        if ($request->hasFile('og_image_upload')) {
            $data['og_image'] = Media::store($request->file('og_image_upload'));
        }
        $seo = PageSeo::updateOrCreate(['page' => $page], $data);
        ActivityLog::record('Updated page SEO', $seo);

        return back()->with('status','SEO saved.');
    }
}
