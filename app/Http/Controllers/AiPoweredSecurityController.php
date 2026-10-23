<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Contracts\View\View;

class AiPoweredSecurityController extends Controller
{
    public function index(): View
    {
      return view('Home.services.ai-powered-security', [
    'contentSeo' => PageSeo::firstOrNew([
        'page' => 'ai-powered-security',
    ]),
]);
    }
}
