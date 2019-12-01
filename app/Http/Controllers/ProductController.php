<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use DB;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $id = DB::table('products')->insertGetId(
            ['name' => "Acuve", 'type' => "Lens", 'eye_side' => "Left", 'power' => "-0.5"]
        );

        return $id;
    }

    public function index()
    {
        $product = product::where("id", "=", 1);
        return $product->id;
    }
}
