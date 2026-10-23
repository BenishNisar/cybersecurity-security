<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\ActivityLog;
use App\Models\SiteSetting;
use App\Support\Media;
use App\Support\Site;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function edit(): View
    {
        return view('admin.settings', ['settings' => app(Site::class)->settings()]);
    }

    public function update(SettingsRequest $request): RedirectResponse
    {
        $data = $request->safe()->except('logo_upload');
        if ($request->hasFile('logo_upload')) {
            $data['logo'] = Media::store($request->file('logo_upload'));
        }
        DB::transaction(function () use ($data): void {
            foreach ($data as $key => $value) {
                SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        });
        ActivityLog::record('Updated website settings');

        return back()->with('status', 'Website settings saved.');
    }
}
