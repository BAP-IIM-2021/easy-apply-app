<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


// Redirects to the registration
Route::get('/inscription', [LoginController::class, 'inscription'])->name('inscription');

// Redirects to the login page
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Redirects to the candidate page
Route::get('/', [LoginController::class, 'candidate'])->name('candidate');
