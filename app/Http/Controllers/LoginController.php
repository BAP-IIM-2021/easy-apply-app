<?php

namespace App\Http\Controllers;

class LoginController extends Controller{

    public function inscription(){
        return view('candidate/register');
    }

    public function login(){
        return view('login');
    }

    public function candidate(){
        return view('candidate/profile');
    }
}

