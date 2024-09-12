<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    // Redirect to a specific page after logout
    return redirect('/login')->with('status', 'Logged out successfully!');
})->name('logout');

Volt::route('/', 'pages.landing-page')->name('home');
Volt::route('equipments', 'pages.all-equipment')->name('all.equipment');
Volt::route('equipment/show/{id}', 'pages.show-equipment')->name('equipment.show');
Volt::route('equipment/book/{id}', 'pages.book-equipment')->name('equipment.book');
Volt::route('equipment/create', 'pages.create-equipment')->name('equipment.create');
Volt::route('about', 'pages.about')->name('about');
Volt::route('contact', 'pages.contact-us')->name('contact');

require __DIR__.'/auth.php';
