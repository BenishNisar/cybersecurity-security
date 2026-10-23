<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Contracts\View\View;

class SocAutomationController extends Controller
{
    public function index(): View
    {
        return view('Home.services.soc-automation', [
            'contentSeo' => PageSeo::firstOrNew([
                'page' => 'soc-automation',
            ]),
        ]);
    }
}
