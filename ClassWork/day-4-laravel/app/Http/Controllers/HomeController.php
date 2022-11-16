<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public $products;

    public function home()
    {
        $this->products = Product::getProduct();
        return view('front.home.home', [
            'products' => $this->products,
        ]); // compact, array
    }
}
