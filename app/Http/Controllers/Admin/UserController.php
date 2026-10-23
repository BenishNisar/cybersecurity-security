<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserRequest;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index(): View
    {
        return view('admin.users.index', ['users' => User::orderBy('name')->paginate(15)]);
    }

    public function create(): View
    {
        return view('admin.users.form', ['member' => new User(['role' => 'editor', 'is_active' => true])]);
    }

    public function edit(User $user): View
    {
        return view('admin.users.form', ['member' => $user]);
    }

    public function store(AdminUserRequest $request): RedirectResponse
    {
        $user = User::create($request->safe()->except('password_confirmation') + ['must_change_password' => true]);
        ActivityLog::record('Created user', $user);

        return redirect()->route('admin.users.index')->with('status', 'User created. Share the initial password through a secure channel. They must change it at first login.');
    }

    private function protect(User $user, ?array $data = null): void
    {
        if ($user->id === auth()->id() && (! $data || $data['role'] !== 'administrator' || ! $data['is_active'])) {
            throw ValidationException::withMessages(['role' => 'You cannot delete, deactivate or demote your own administrator account.']);
        }
        if ($user->role === 'administrator' && $user->is_active && (! $data || $data['role'] !== 'administrator' || ! $data['is_active'])) {
            if (User::where('role', 'administrator')->where('is_active', true)->lockForUpdate()->get()->count() <= 1) {
                throw ValidationException::withMessages(['role' => 'Keep at least one active administrator.']);
            }
        }
    }

    public function update(AdminUserRequest $request, User $user): RedirectResponse
    {
        DB::transaction(function () use ($request, $user): void {
            User::where('role', 'administrator')->orderBy('id')->lockForUpdate()->get();
            $user->refresh();
            $data = $request->safe()->except('password_confirmation');
            $this->protect($user, $data);
            if (empty($data['password'])) {
                unset($data['password']);
            } else {
                $data['must_change_password'] = true;
            }
            $data['session_version'] = $user->session_version + 1;
            $user->update($data);
            ActivityLog::record('Updated user access', $user);
            if ($user->id === auth()->id()) {
                $request->session()->put('admin_version', $user->session_version);
            }
        });

        return back()->with('status', 'User saved. Existing sessions must sign in again.');
    }

    public function destroy(User $user): RedirectResponse
    {
        DB::transaction(function () use ($user): void {
            User::where('role', 'administrator')->orderBy('id')->lockForUpdate()->get();
            $user->refresh();
            $this->protect($user);
            ActivityLog::record('Deleted user', $user);
            $user->delete();
        });

        return redirect()->route('admin.users.index')->with('status', 'User deleted.');
    }
}
