<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
  public function create() {
    return view('login');
  }

  public function store(){
    $attributes = request()->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (auth()->attempt($attributes)){
      session()->regenerate();
      return redirect('/account');
    }

    return back()->withErrors(['email' => 'Not be verified']);
  }

  public function close() {
    auth()->logout();

    return redirect('/')->with('success', 'Goodbye!');
  }

  public function choose() {
    return view('account');
  }
}
