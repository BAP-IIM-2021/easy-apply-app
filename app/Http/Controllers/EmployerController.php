<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;

class EmployerController extends Controller
{
  public function create() {
    return view('employer/register');
  }

  public function store() {

    $attributes = request()-> validate ([
      'name' => ['required'],
      // 'address' => ['required'],
      'logo' => ['required'],
      'description' => ['required'],
      'id_company_size' => ['required'],
      'id_sector' => ['required'],
      'id_user' => ['required'],
      
    ]);

    Company::create($attributes);

    return redirect('/employer');
  }

  public function profile() {
    
    return view('employer/profile');
  }

  public function newJob(){

    return view('employer/newJob');
  }

  public function store_job(){
    $attributes = request()->validate([
      'label' => ['required', 'max:50'],
      'id_sector' => ['required'],
      'id_working_mode' => ['required'],
  
      'salary' => 'numeric',
      'id_sector' => ['required'],
      'id_company' => ['required'],
      'description' => ['required'],
      'archive_date' => ['required'],
      'id_contract_type' => ['required'],
    ]);
  
    Job::create($attributes);

    return redirect ('/employer');
  }

  public function job(){
    return view('employer/job');
  }

  public function destroy(Job $job){
    $job->delete();
  }

}
