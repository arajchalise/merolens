<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('Products.index');
    }

    public function store(Request $request)
    {
        return Product::create([
            'name' => "Contact Lens",
            'brand_name' => "Ray Ban",
            'type' => "Color Change",
            'description' => "Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other.",
            'photo' => "contact.jpg",
            'price' => '25.77'
        ]);
    }

    public function destroy($id)
    {
        return $id;
    }
}
