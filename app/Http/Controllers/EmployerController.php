<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
  public function register() {
    return view('employer/register');
  }

  public function profile() {
    return view('employer/profile');
  }
}
