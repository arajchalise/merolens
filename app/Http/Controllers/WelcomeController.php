<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
             $product = Product::with('photo')->latest()->get();
            return view('welcome', ['products' => $product]);
            
        } catch (\PDOException $e) {
            die("Database Error, Please visit sometime later");
        }
    }
}
