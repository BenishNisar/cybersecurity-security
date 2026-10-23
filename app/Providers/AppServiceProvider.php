<?php

namespace App\Providers;

use App\Models\User;
use App\Support\Site;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->scoped(Site::class);
    }

    public function boot(): void
    {
        foreach (['content', 'enquiries', 'settings', 'users', 'activity', 'dashboard'] as $ability) {
            Gate::define($ability, fn (User $user): bool => $user->hasAccess($ability));
        }
        RateLimiter::for('admin-login', fn (Request $request) => [Limit::perMinute(20)->by('ip:'.$request->ip()), Limit::perMinute(5)->by('account:'.hash('sha256', Str::lower((string) $request->input('email'))))]);
        RateLimiter::for('contact', fn (Request $request) => Limit::perMinute(3)->by($request->ip()));
        View::composer(['Layout.layout', 'Home.*'], function ($view): void {
            $site = app(Site::class);
            $view->with('site', $site->settings())->with('pageSeo', $site->seo());
        });
    }
}
