<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $data = $request->validate(['email' => ['required', 'email', 'max:254'], 'password' => ['required', 'string', 'max:1024']]);
        $credentials = ['email' => Str::lower($data['email']), 'password' => $data['password'], 'is_active' => true];
        if (! Auth::attempt($credentials)) {
            throw ValidationException::withMessages(['email' => 'These credentials could not be verified.']);
        }
        $request->session()->regenerate();
        if (! $request->user()->hasAccess('dashboard')) {
            Auth::logout();
            $request->session()->invalidate();
            throw ValidationException::withMessages(['email' => 'These credentials could not be verified.']);
        }
        $request->session()->put('admin_version', $request->user()->session_version);
        $request->user()->forceFill(['last_login_at' => now()])->save();
        ActivityLog::record('Signed in');

        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        ActivityLog::record('Signed out');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function account(): View
    {
        return view('admin.auth.account');
    }

    public function password(Request $request): RedirectResponse
    {
        $data = $request->validate(['current_password' => ['required', 'current_password:web'], 'password' => ['required', 'confirmed', 'different:current_password', Password::min(14)->mixedCase()->numbers()->symbols()]]);
        $user = $request->user();
        $user->forceFill(['password' => Hash::make($data['password']), 'session_version' => $user->session_version + 1, 'must_change_password' => false, 'remember_token' => Str::random(60)])->save();
        $request->session()->put('admin_version', $user->session_version);
        $request->session()->regenerate();
        ActivityLog::record('Changed password', $user);

        return back()->with('status', 'Password updated. Other sessions will be required to sign in again.');
    }
}
