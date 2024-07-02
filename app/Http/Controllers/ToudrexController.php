<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToudrexController extends Controller
{
    //Home Controller
    public function home(){
        return view('content.Home');
    }
}
