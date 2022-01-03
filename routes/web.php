<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Redirects to home page
Route::get('/', function(){
  return view('home');
});

// Redirects to the registration
Route::get('/inscription', [LoginController::class, 'inscription'])->name('inscription');

// Redirects to the login page
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Redirects to the candidate page
Route::get('/candidate', [LoginController::class, 'candidate'])->name('candidate');

// Redirects to the job-created page
Route::get('/job-created', [LoginController::class, 'jobCreated'])->name('job-created');