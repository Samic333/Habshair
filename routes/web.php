<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Homepage
Route::view('/', 'home')->name('home');

// Public pages
Route::view('/routes', 'routes')->name('routes');
Route::view('/schedule', 'schedule')->name('schedule');
Route::view('/help', 'help')->name('help');

// Booking and VIP
Route::get('/book', fn () => view('booking'))->name('book');
Route::get('/vip', fn () => view('vip'))->name('vip');

// Customer portal landing (placeholder, not gated)
Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

// Profile (auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}
