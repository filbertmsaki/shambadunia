<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['as' => 'web.'], function () {
    Route::get('/', [WebController::class, 'index'])->name('index');
    Route::get('/about-us', [WebController::class, 'about_us'])->name('about_us');
    Route::get('/services', [WebController::class, 'services'])->name('services');
    Route::get('/services/{service}', [WebController::class, 'service'])->name('service');
    Route::get('/services/{service}/{key}', [WebController::class, 'service_more'])->name('service.more');
    Route::get('/contact-us', [WebController::class, 'contact_us'])->name('contact_us');
    Route::post('/contact-us', [WebController::class, 'contact_us_store'])->name('contact_us.store');
    Route::post('/subscriber', [WebController::class, 'subscriber'])->name('subscriber.store');
    Route::get('/terms-conditions', [WebController::class, 'terms_conditions'])->name('terms.conditions');
    Route::get('/privacy-policy', [WebController::class, 'privacy_policy'])->name('privacy.policy');
    Route::get('/faq', [WebController::class, 'faq'])->name('faq');
    Route::get('/gallery', [WebController::class, 'gallery'])->name('gallery');
    Route::get('/coming-soon', [WebController::class, 'coming_soon'])->name('coming.soon');
    Route::get('/branding-events/{event}', [WebController::class, 'branding_events'])->name('branding.events');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
