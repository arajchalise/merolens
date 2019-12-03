<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\photo;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::with('photo')->get();
        return view('Products.index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        $product =  product::find($product->id)->with('photo')->get();
        if(is_null($product)){
            return "Nothing to Show";
        }
        return view('Products.detailedView', ['product' => $product]);
    }

    public function create()
    {
        return view('Products.create');
    }

    public function store(Request $request)
    {
        return Product::create([
            'name' => "Contact Lens",
            'brand_name' => "Ray Ban",
            'type' => "Color Change",
            'description' => "Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other.",
            'price' => '2577'
        ]);
    }

    public function addToCart(Request $request, Product $product)
    {
        $prod = Product::find($product->id);
         $request->session()->put('productName', $prod->name);
        $request->session()->put($prod->id, array($prod->name, $prod->price));
        return $request->session()->get($prod->id);
    }

    public function productImageStore(product $product)
    {
        $pro = product::find($product->id);
        return photo::create(array(
            'product_id' => $pro->id,
            'photo' => 'img2.jpg'
        ));
    }

    public function destroy($id)
    {
        if(DB::table('products')->where('id', '=', $id)->delete()){
            return "Deleted";
        }
    }
}
