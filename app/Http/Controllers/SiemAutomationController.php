<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Contracts\View\View;

class SiemAutomationController extends Controller
{
    public function index(): View
    {
        return view('Home.services.siem-automation', [
            'contentSeo' => PageSeo::firstOrNew([
                'page' => 'siem-automation',
            ]),
        ]);
    }
}
