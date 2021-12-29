<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Redirects to home page
Route::get('/', function() {
  return view('home');
});

// Redirect to employer registration
Route::get('/register-employer', function() {
  return view('register-employer');
});

// Redirect to employer profile
Route::get('/employer', function() {
  return view('profile-employer');
});

// Redirects to candidate registration
Route::get('/inscription', [LoginController::class, 'inscription'])->name('inscription');

// Redirects to candidate login page
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Redirects to the candidate page
Route::get('/candidate', [LoginController::class, 'candidate'])->name('candidate');
