<?php

namespace App\Http\Controllers;

class LoginController extends Controller{

    public function inscription(){
        return view('inscription');
    }

    public function login(){
        return view('login');
    }
}

