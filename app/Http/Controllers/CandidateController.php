<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
  public function register() {
    return view('candidate/register');
  }

  public function profile() {
    return view('candidate/profile');
  }
}
