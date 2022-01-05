<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function create() {
    return view('register');
  }

  public function store() {

    $attributes = request()-> validate([
      'email' => [ 'required', 'unique:users,email', 'email', 'max:255' ],
      'password' => [ 'required', 'min:8', 'max:255' ],
      'password-verify' => [ 'required', 'same:password']
    ]);

    $attributes['password'] = bcrypt($attributes['password']);

    auth()->login(User::create($attributes));

    return redirect('/account');
  }
}
