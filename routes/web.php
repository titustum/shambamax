<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('equipment/list', 'list-equipment')->name('list.equipment');
Route::view('equipment/book', 'book-equipment')->name('book.equipment');
Route::view('equipment/show', 'show-equipment')->name('show.equipment');

Volt::route('/', 'pages.landing-page')->name('home');
Volt::route('equipments', 'pages.all-equipment')->name('all.equipment');
Volt::route('equipment/show/{id}', 'pages.show-equipment')->name('equipment.show');
Volt::route('equipment/book/{id}', 'pages.book-equipment')->name('equipment.book');
Volt::route('equipment/create', 'pages.create-equipment')->name('equipment.create');
Volt::route('about', 'pages.about')->name('about');

require __DIR__.'/auth.php';
