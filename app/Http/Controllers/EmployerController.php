<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
  public function create() {
    return view('employer/register');
  }

  public function store() {

    $attributes = request()-> validate ([
      'company_name' => ['required'],
      'address' => ['required'],
      'logo' => ['required'],
      'description' => ['required'],
      'company_size_id' => ['required'],
      'business_sector_id' => ['required'],
      'user_id' => ['required']
    ]);

    Employer::create($attributes);
    
    return redirect('/employer');
  }

  public function profile() {
    return view('employer/profile');
  }

  public function newJob(){
    return view('employer/newJob');
  }

  public function job(){
    return view('employer/job');
  }
}
