<?php

namespace App\Http\Controllers;

use App\Models\ContentItem;
use Illuminate\Contracts\View\View;

class InsightsController extends Controller
{
    public function index(): View
    {
        return view('Home.insights', ['articles' => ContentItem::where('type', 'article')->published()->orderByDesc('published_at')->paginate(9)]);
    }
}
