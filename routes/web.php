<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Livewire\Clients\Update\Personal;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\authPagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentDownloadController;
use App\Livewire\Clients\ClientList;
use App\Livewire\Clients\ClientShow;
use App\Livewire\Clients\Create\Create;

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
// Livewire Client pages and logic using livewire components
Route::get('/client/create', Create::class)->name('client.create');
Route::get('/client/{client}', ClientShow::class)->name('client.show');
Route::get('/clients', ClientList::class)->name('clients');
// Document downloads
Route::get('/generate-english-agreement/{client:name}', [DocumentDownloadController::class, 'generateEnglishPDF'])->name('english.document');
Route::get('/generate-luganda-agreement/{client:name}', [DocumentDownloadController::class, 'generateLugandaPDF'])->name('luganda.document');
