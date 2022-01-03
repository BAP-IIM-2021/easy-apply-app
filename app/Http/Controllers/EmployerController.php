<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
  public function create() {
    return view('employer/register');
  }

  public function store() {
    $attributes = request()-> validate ([
      
    ]);
  }

  public function profile() {
    return view('employer/profile');
  }

  public function newJob(){
    return view('employer/create-job');
  }
}
