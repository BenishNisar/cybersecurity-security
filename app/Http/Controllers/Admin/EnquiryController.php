<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Enquiry;
use App\Support\Site;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class EnquiryController extends Controller
{
    public function index(Request $request): View
    {
        $query = Enquiry::query();
        $q = mb_substr((string) $request->query('q'), 0, 100);
        if ($q !== '') {
            $query->where(fn ($query) => $query->where('full_name', 'like', '%'.$q.'%')->orWhere('email', 'like', '%'.$q.'%')->orWhere('company', 'like', '%'.$q.'%'));
        }
        if (in_array($request->query('status'), ['new', 'in_progress', 'closed'], true)) {
            $query->where('status', $request->query('status'));
        }
        $days = (int) app(Site::class)->settings()['retention_days'];

        return view('admin.enquiries.index', ['items' => $query->latest()->paginate(15)->withQueryString(), 'overdue' => Enquiry::where('created_at', '<', now()->subDays($days))->count(), 'days' => $days]);
    }

    public function show(Enquiry $enquiry): View
    {
        $enquiry->load('notes.user:id,name');

        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function update(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $data = $request->validate(['status' => ['required', Rule::in(['new', 'in_progress', 'closed'])], 'note' => ['nullable', 'string', 'max:4000']]);
        try {
            DB::transaction(function () use ($data, $request, $enquiry): void {
                $enquiry->update(['status' => $data['status']]);
                if (! empty($data['note'])) {
                    $enquiry->notes()->create(['user_id' => $request->user()->id, 'body' => $data['note']]);
                }
                ActivityLog::record('Updated enquiry', $enquiry);
            });
        } catch (QueryException $exception) {
            Log::error('Enquiry update could not be stored. Check database connectivity.');

            return back()->withErrors(['note' => 'The update could not be saved. Please try again.']);
        }

        return back()->with('status', 'Enquiry updated.');
    }

    public function destroy(Enquiry $enquiry): RedirectResponse
    {
        ActivityLog::record('Deleted enquiry', $enquiry);
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')->with('status', 'Enquiry and its notes deleted.');
    }
}
