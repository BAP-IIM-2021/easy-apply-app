<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\SearchController;

/*------------------------------------------------------------------------ 
                  All About common pages
------------------------------------------------------------------------*/

// Redirect to the home page
Route::get('/', HomeController::class );

// Redirects to login page
Route::get('/login', [SessionController::class, 'create'])->middleware('guest');

// To get user data and check it to login it
Route::post('/login', [SessionController::class, 'store'])->middleware('guest')->name('login');

// Redirects to register page
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');

// To get data user insert in the page for he's register
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// To logout user
Route::post('/logout', [SessionController::class, 'close'])->middleware('auth');

// Redirects to the account page
Route::get('/account', [SessionController::class, 'choose'])->middleware('auth');

/*------------------------------------------------------------------------ 
                  All About Candidate pages
------------------------------------------------------------------------*/

// Redirects to candidate registration
Route::get('/candidate/register', [CandidateController::class, 'create'])->middleware('auth');

// To get data candidate insert in the page
Route::post('/candidate/register', [CandidateController::class, 'store'])->middleware('auth');

// Redirects to the candidate page
Route::get('/candidate', [CandidateController::class, 'profile'])->middleware('auth');

/*------------------------------------------------------------------------ 
                  All About Employer pages
------------------------------------------------------------------------*/

// Redirects to Employer registration
Route::get('/employer/register', [EmployerController::class, 'create'])->middleware('auth');

// To get data employer insert in the page
Route::post('/employer/register', [EmployerController::class, 'store'])->middleware('auth');

// Redirects to the Employer page
Route::get('/employer', [EmployerController::class, 'profile'])->middleware('auth');

// Redirects to the New Job page
Route::get('/employer/new-job', [EmployerController::class, 'newJob'])->middleware('auth');

Route::post('/employer/new-job', [EmployerController::class, 'store_job'])->middleware('auth');

// Redirects to the job-created page
Route::get('/employer/job', [EmployerController::class, 'job'])->middleware('auth');

/*------------------------------------------------------------------------ 
                  All About Search
------------------------------------------------------------------------*/

Route::get('/search', SearchController::class);