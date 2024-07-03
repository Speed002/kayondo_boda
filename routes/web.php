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
use App\Http\Controllers\RemoveClientController;
use App\Livewire\Clients\ClientList;
use App\Livewire\Clients\ClientShow;
use App\Livewire\Clients\Create\Create;

// Guest routes (accessible only when not authenticated)
Route::middleware('guest')->group(function () {
    // Auth Pages
    Route::get('/', AuthPagesController::class);
    Route::get('/login', LoginController::class)->name('login');
    Route::get('/register', RegisterController::class)->name('register');
    // Auth Logic
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/register', [RegisterController::class, 'store']);
});

// Authenticated routes (accessible only when authenticated)
Route::middleware('auth')->group(function () {
    // Auth Dashboard
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    // Auth Profile
    Route::get('/profile', ProfileController::class)->name('profile');
    Route::put('/profile-password-update', [ProfileController::class, 'update_password'])->name('update.password');
    // Livewire Client Pages and Logic
    Route::get('/client/create', Create::class)->name('client.create');
    Route::get('/client/{client}', ClientShow::class)->name('client.show');
    Route::get('/clients', ClientList::class)->name('clients');
    // Document downloads
    Route::get('/generate-english-agreement/{client:name}', [DocumentDownloadController::class, 'generateEnglishPDF'])->name('english.document');
    Route::get('/generate-luganda-agreement/{client:name}', [DocumentDownloadController::class, 'generateLugandaPDF'])->name('luganda.document');
    Route::get('/generate-take-over-form/{client:name}', [DocumentDownloadController::class, 'generateTakeOverForm'])->name('take-over.document');
    Route::get('/generate-online-hirer-form/{client:name}', [DocumentDownloadController::class, 'generateOnlineHirerForm'])->name('online-hirer-form.document');
    Route::post('/remove-client/{client}', [RemoveClientController::class, 'destroy'])->name('remove-client');
});
