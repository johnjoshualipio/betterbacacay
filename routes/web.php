<?php

use App\Http\Controllers\Civic\PortalController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortalController::class, 'home'])->name('home');
Route::get('/about', [PortalController::class, 'about'])->name('about');
Route::get('/services', [PortalController::class, 'services'])->name('services');
Route::get('/services/{service}', [PortalController::class, 'service'])->name('services.show');
Route::get('/barangays', [PortalController::class, 'barangays'])->name('barangays');
Route::get('/barangays/{barangay}', [PortalController::class, 'barangay'])->name('barangays.show');
Route::get('/transparency', [PortalController::class, 'transparency'])->name('transparency');
Route::get('/transparency/{section}', [PortalController::class, 'transparencySection'])->name('transparency.section');
Route::get('/tourism', [PortalController::class, 'tourism'])->name('tourism');
Route::get('/tourism/{destination}', [PortalController::class, 'destination'])->name('tourism.show');
Route::get('/news', [PortalController::class, 'news'])->name('news');
Route::get('/news/{article}', [PortalController::class, 'article'])->name('news.show');
Route::get('/directory', [PortalController::class, 'directory'])->name('directory');
Route::get('/emergency', [PortalController::class, 'emergency'])->name('emergency');
Route::get('/contact', [PortalController::class, 'contact'])->name('contact');
Route::get('/sources', [PortalController::class, 'sources'])->name('sources');
Route::get('/search', [PortalController::class, 'search'])->name('search');
Route::get('/sitemap.xml', [PortalController::class, 'sitemap'])->name('sitemap');

Route::post('/submissions', [SubmissionController::class, 'store'])
    ->middleware('throttle:public-submissions')
    ->name('submissions.store');
