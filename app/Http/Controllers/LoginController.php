<?php

namespace App\Http\Controllers;

class LoginController extends Controller{

    public function index(){
        return view('login');
    }

    public function login_2(){
        return view('login_2');
    }

}

