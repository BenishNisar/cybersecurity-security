<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Contracts\View\View;

class ThreatDetectionController extends Controller
{
    public function index(): View
    {
        return view('Home.services.threat-detection', [
            'contentSeo' => PageSeo::firstOrNew([
                'page' => 'threat-detection',
            ]),
        ]);
    }
}
