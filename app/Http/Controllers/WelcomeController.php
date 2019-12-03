<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        $product = Product::with('photo')->get();
        return view('welcome', ['products' => $product]);
    }
}
