<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        // the moment only return the view, but after we write and code the logic behind this
        return view('Login.login');
    }
    public function Create(){
        
    }
}
