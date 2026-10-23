<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\PublicContentController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AiPoweredSecurityController;
use App\Http\Controllers\ThreatDetectionController;
use App\Http\Controllers\SecurityAnalyticsController;
use App\Http\Controllers\SocAutomationController;
use App\Http\Controllers\SiemAutomationController;


use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('Home.welcome');
Route::get('/solutions', [SolutionsController::class, 'index'])->name('Home.solutions');
Route::get('/services', [ServicesController::class, 'index'])->name('Home.services');
Route::get('/industries', [IndustriesController::class, 'index'])->name('Home.industries');
Route::get('/insights', [InsightsController::class, 'index'])->name('Home.insights');
Route::get('/insights/{slug}', [PublicContentController::class, 'article'])->name('insights.show');
Route::get('/contact', [ContactController::class, 'index'])->name('Home.contact');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:contact')->name('contact.store');
Route::redirect('/company', '/#about');
Route::get('/sitemap.xml', [PublicContentController::class, 'sitemap'])->name('sitemap');
Route::prefix('admin')->group(function (): void {
    Route::middleware('guest')->group(function (): void {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'authenticate'])->middleware('throttle:admin-login')->name('admin.login');
    });
    Route::middleware(['auth', 'admin.access'])->name('admin.')->group(function (): void {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/account', [AuthController::class, 'account'])->name('account');
        Route::put('/account/password', [AuthController::class, 'password'])->middleware('throttle:6,1')->name('account.password');
        Route::middleware('can:content')->group(function (): void {
            Route::get('/content/{kind}', [ContentController::class, 'index'])->name('content.index');
            Route::get('/content/{kind}/create', [ContentController::class, 'create'])->name('content.create');
            Route::post('/content/{kind}', [ContentController::class, 'store'])->name('content.store');
            Route::get('/content/{kind}/{content}/edit', [ContentController::class, 'edit'])->name('content.edit');
            Route::put('/content/{kind}/{content}', [ContentController::class, 'update'])->name('content.update');
            Route::delete('/content/{kind}/{content}', [ContentController::class, 'destroy'])->name('content.destroy');
            Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
            Route::get('/seo/{page}', [SeoController::class, 'edit'])->name('seo.edit');
            Route::put('/seo/{page}', [SeoController::class, 'update'])->name('seo.update');
        });
        Route::middleware('can:enquiries')->group(function (): void {
            Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
            Route::get('/enquiries/{enquiry}', [EnquiryController::class, 'show'])->name('enquiries.show');
            Route::put('/enquiries/{enquiry}', [EnquiryController::class, 'update'])->name('enquiries.update');
            Route::delete('/enquiries/{enquiry}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');
        });
        Route::get('/settings', [SettingsController::class, 'edit'])->middleware('can:settings')->name('settings');
        Route::put('/settings', [SettingsController::class, 'update'])->middleware('can:settings')->name('settings.update');
        Route::resource('/users', UserController::class)->except('show')->middleware('can:users');
        Route::get('/activity', [DashboardController::class, 'activity'])->middleware('can:activity')->name('activity');
    });
});
Route::get('/admin/preview/{content}',[PublicContentController::class, 'preview'])->middleware(['auth', 'admin.access', 'can:content'])->name('content.preview');





// services
Route::get(
    '/services/ai-powered-security',
    [AiPoweredSecurityController::class, 'index']
)->name('services.ai-powered-security');



Route::get(
    '/services/soc-automation',
    [SocAutomationController::class, 'index']
)->name('services.soc-automation');



Route::get(
    '/services/siem-automation',
    [SiemAutomationController::class, 'index']
)->name('services.siem-automation');

Route::get(
    '/services/threat-detection',
    [ThreatDetectionController::class, 'index']
)->name('services.threat-detection');


Route::get(
    '/services/security-analytics',
    [SecurityAnalyticsController::class, 'index']
)->name('services.security-analytics');
