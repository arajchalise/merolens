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
        $products = product::with('photo')->latest()->get();
        return view('Products.index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        $product =  product::where('id', '=', $product->id)->with('photo')->get();
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
        $file = $request->file('photo');
        $name = str_replace(":", "_", $request->product_name);
        $name = str_replace("?", "_", $name);
        $name = str_replace(" ", "_", $name);
        $ext = $file->getClientOriginalExtension();
        if ($file->move("images/", "{$name}.{$ext}")){
           $id =  product::create([
            'name' => $request->product_name,
            'type' => $request->product_category,
            'brand_name' => $request->brand_name,
            'description' => $request->product_description,
            'stock' => $request->stock,
            'price' => $request->product_price
        ])->id;
        photo::create([
            'product_id' => $id,
            'photo' => $name.".".$ext
        ]);
        return redirect()->route('products');
        } else{
            return "Error Uploading file";
        }
    }

    public function addToCart(Request $request)
    {
        $cart = array(
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->qty,
            'amt' => $request->price*$request->qty,
            'lp' => $request->leftEye,
            'rp' => $request->rightEye
        );
        $request->session()->push('cart', $cart);
        return redirect()->route('welcome'); 
    }


    public function removeCart(Request $request, $id)
    {
        $sessions = $request->session()->get('cart');
        unset($sessions[$id]);
        $cart = array_values($sessions);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function showCart(Request $request)
    {
        $sessions = $request->session()->get('cart');
        return $sessions;
    }

    public function getStock($id)
    {
        $prod = product::find($id);
        return $prod['id'];
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
