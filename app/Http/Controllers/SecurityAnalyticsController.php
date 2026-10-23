<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Contracts\View\View;

class SecurityAnalyticsController extends Controller
{
    public function index(): View
    {
        return view('Home.services.security-analytics', [
            'contentSeo' => PageSeo::firstOrNew([
                'page' => 'security-analytics',
            ]),
        ]);
    }
}
