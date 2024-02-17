<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::class, 'home']);
Route::get('/upload', function () { return view('upload'); });
Route::get('/register', function () { return view('register'); });
Route::get('/login', function () { return view('login'); });


Route::post('/user/create', [App\Http\Controllers\UserController::class, 'register'])->name('user.register');
Route::post('/user/login', [App\Http\Controllers\UserController::class, 'login'])->name('user.login');
Route::get('/user/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');


Route::post('/equipment/create', [App\Http\Controllers\EquipmentController::class, 'create'])->name('equipment.create');
