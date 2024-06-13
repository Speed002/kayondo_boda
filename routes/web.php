<?php

use App\Http\Controllers\authPagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// auth Pages
Route::get('/', authPagesController::class);
Route::get('/login', LoginController::class)->name('login');
Route::get('/register', RegisterController::class)->name('register');
// auth Logic
Route::post('/login', [LoginController::class, 'store']);
Route::post('/register', [RegisterController::class, 'store']);
// auth dashboard
Route::get('/dashboard', DashboardController::class)->name('dashboard');
// auth profile
Route::get('/profile', ProfileController::class)->name('profile');
Route::put('/profile-password-update', [ProfileController::class, 'update_password'])->name('update.password');
// password-reset
