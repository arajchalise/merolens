<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductsController extends Controller
{
    public function index()
    {
        return "This is product";
    }

    public function store(Request $request)
    {
        $product = new product();

        
    }
}
