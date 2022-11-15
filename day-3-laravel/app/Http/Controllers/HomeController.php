<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function fullName(){
        return view('fullName');
    }
    public function calculator(){
        return view('calculator');
    }

//    full name
    public function fullname1(){

    }
}
