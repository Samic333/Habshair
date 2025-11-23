<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;

// Homepage
Route::view('/', 'home')->name('home');

// Public pages
Route::view('/routes', 'routes')->name('routes');
Route::view('/schedule', 'schedule')->name('schedule');
Route::view('/help', 'help')->name('help');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Services
Route::prefix('services')->name('services.')->group(function () {
    Route::view('/air-charter', 'services.air-charter')->name('air-charter');
    Route::view('/cargo', 'services.cargo')->name('cargo');
    Route::view('/drone', 'services.drone')->name('drone');
    Route::view('/medevac', 'services.medevac')->name('medevac');
    Route::view('/vip', 'services.vip')->name('vip');
});

// Fleet
Route::view('/fleet', 'fleet.index')->name('fleet');

// Booking and VIP
Route::get('/book', fn () => view('booking'))->name('book');
Route::get('/vip', fn () => view('services.vip'))->name('vip');

// Customer portal landing (placeholder, not gated)
Route::view('/dashboard', 'client.dashboard')->name('dashboard');
Route::view('/client/dashboard', 'client.dashboard')->name('client.dashboard');

// Quote requests
Route::post('/quotes', [QuoteController::class, 'store'])->name('quotes.store');

// Profile (auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}
