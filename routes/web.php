<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CandidateController;

/*------------------------------------------------------------------------ 
                  All About Common pages
------------------------------------------------------------------------*/

// Redirect to the home page
Route::get('/', HomeController::class );

// Redirects to login page
Route::get('/login', LoginController::class );

// Redirects to register page
Route::get('/register', RegisterController::class );

/*------------------------------------------------------------------------ 
                  All About Candidate pages
------------------------------------------------------------------------*/

// Redirects to candidate registration
Route::get('/register-candidate', [CandidateController::class, 'register']);

Route::post('/register-candidate', [CandidateController::class, 'store']);

// Redirects to the candidate page
Route::get('/candidate', [CandidateController::class, 'profile']);

/*------------------------------------------------------------------------ 
                  All About Employer pages
------------------------------------------------------------------------*/

// Redirects to Employer registration
Route::get('/register-employer', [EmployerController::class, 'register']);

// Redirects to the Employer page
Route::get('/employer', [EmployerController::class, 'profile']);

// Redirects to the New Job page
Route::get('/new-job', [EmployerController::class, 'newJob']);