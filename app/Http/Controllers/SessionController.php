<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if (auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors(['email' => 'L\'adresse email ou le mot de passe n\'est pas valide']);
    }
}
