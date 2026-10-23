<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\ContentItem;
use App\Models\Enquiry;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $counts = [];
        if (auth()->user()->can('content')) {
            $counts['Published insights'] = ContentItem::where('type', 'article')->published()->count();
            $counts['Draft content'] = ContentItem::where('status', 'draft')->count();
        }
        if (auth()->user()->can('enquiries')) {
            $counts['New enquiries'] = Enquiry::where('status', 'new')->count();
        }

        return view('admin.dashboard', ['counts' => $counts, 'recent' => auth()->user()->can('content') ? ContentItem::where('type', 'article')->latest('updated_at')->take(6)->get() : collect(), 'enquiries' => auth()->user()->can('enquiries') ? Enquiry::latest()->take(5)->get() : collect()]);
    }

    public function activity(): View
    {
        return view('admin.activity', ['logs' => ActivityLog::with('user:id,name')->latest('created_at')->paginate(25)]);
    }
}
