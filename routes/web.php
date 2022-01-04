<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CandidateController;

/*------------------------------------------------------------------------
                  All About common pages
------------------------------------------------------------------------*/

// Redirect to the home page
Route::get('/', HomeController::class );

// Redirects to login page
Route::get('/login', LoginController::class );

// Redirects to register page
Route::get('/register', [RegisterController::class, 'create']);

// To get data user insert in the page for he's register
Route::post('/register', [RegisterController::class, 'store']);

// Redirects to the account page
Route::get('/account', function (){
    return view("account");
});

/*------------------------------------------------------------------------
                  All About Candidate pages
------------------------------------------------------------------------*/

// Redirects to candidate registration
Route::get('/candidate/register', [CandidateController::class, 'create']);

// To get data candidate insert in the page
Route::post('/candidate/register', [CandidateController::class, 'store']);

// Redirects to the candidate page
Route::get('/candidate', [LoginController::class, 'candidate'])->name('candidate');

/*------------------------------------------------------------------------
                  All About Employer pages
------------------------------------------------------------------------*/

// Redirects to Employer registration
Route::get('/employer/register', [EmployerController::class, 'create']);

// To get data employer insert in the page
Route::post('/employer/register', [EmployerController::class, 'store']);

// Redirects to the Employer page
Route::get('/employer', [EmployerController::class, 'profile']);

// Redirects to the New Job page
Route::get('/employer/new-job', [EmployerController::class, 'newJob']);


Route::post('/login', [SessionController::class, 'store']);

// Redirects to the job-created page
Route::get('/job-created', function (){
    return view("job-created");
});

// Redirects to the profile page
Route::get('/profile-candidate', function (){
    return view("profile-candidate");
});