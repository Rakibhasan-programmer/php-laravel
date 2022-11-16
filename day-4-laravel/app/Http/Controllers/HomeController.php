<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(){
        return view('front.home.home');
    }
    public function fullName(){
        return view("front.fullName.fullName");
    }

}
