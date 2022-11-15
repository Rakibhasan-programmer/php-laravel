<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public $products;

    public function home(){
        $this->products = Product::products();
        return view('home', [
            'products' => $this->products,
        ]); // compact, array
    }
    public function fullName(){
        return view('fullName');
    }
    public function calculator(){
        return view('calculator');
    }

}
