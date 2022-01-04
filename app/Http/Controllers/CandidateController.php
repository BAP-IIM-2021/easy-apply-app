<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
  public function create(){
    return view('candidate/register');
  }

  public function store(){
    // Create the user
    $attributes = request()->validate([
      'last_name' => ['required', 'max:30', 'min:3'],
      'firstname' => ['required', 'max:30', 'min:3'],
      'birth_date' => 'date',
      'address' => 'min:3',
      'phone_number' => 'numeric',
      'user_id' => ['required']
    ]);

    Candidate::create($attributes);

    return redirect('/candidate');
  }

  public function profile($id) {
    $candidate = Candidate::findOrFail($id);
    $softskills = $candidate->softkills;
    return view('candidate/profile', [ 
      'candidate' => $candidate,
      'softskills' => $softskills
    ]);
  }

  public function destroy($id)
  {
    
  }
}
