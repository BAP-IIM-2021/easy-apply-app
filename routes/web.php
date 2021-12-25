<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


// Redirects by default to the registration
// To be changed by the home page / page where the user arrives first
Route::get('/', [LoginController::class, 'inscription'])->name('inscription');

// Redirects to the login page
Route::get('/login', [LoginController::class, 'login'])->name('login');
