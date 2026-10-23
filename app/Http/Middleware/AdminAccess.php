<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (! $user || ! $user->hasAccess('dashboard') || (int) $request->session()->get('admin_version') !== (int) $user->session_version) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->withErrors(['email' => 'Please sign in with an active authorised account.']);
        }
        if ($user->must_change_password && ! $request->routeIs('admin.account*', 'admin.logout')) {
            return redirect()->route('admin.account')->with('status', 'Set your own password before continuing.');
        }

        return $next($request);
    }
}
