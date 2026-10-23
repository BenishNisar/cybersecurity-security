<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Enquiry;
use App\Support\Site;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('Home.contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        try {
            Enquiry::create($request->safe()->only(['full_name', 'email', 'company', 'role', 'interest', 'message']) + ['privacy_version' => app(Site::class)->settings()['privacy_version'], 'consented_at' => now()]);
        } catch (QueryException $exception) {
            Log::error('Contact enquiry could not be stored. Check database connectivity.');

            return back()->withErrors(['message' => 'Your enquiry could not be saved. Please try again or use the contact email.'])->withInput($request->except(['_token', 'website_url']));
        }

        return redirect()->to(route('Home.contact').'#enquiry-form')->with('enquiry_sent', 'Your enquiry has been received. The OryvantAI team can now review it.');
    }
}
