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
        $product =  product::where('id', '=', $product->id)
                            ->with('photo')
                            ->with('review', 'Review.client')
                            ->get();
        if(is_null($product)){
            return "Nothing to Show";
        }
        // return $product[0];
        return view('Products.detailedView', ['product' => $product[0]]);
    }

    public function create()
    {
        return view('Products.create');
    }

    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->with('photo')->get();
        //return $product;
        return view('Products.edit', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $i = 0;
        $id =  product::create([
            'name' => $request->product_name,
            'type' => $request->product_category,
            'brand_name' => $request->brand_name,
            'description' => $request->product_description,
            'stock' => $request->stock,
            'price' => $request->product_price
        ])->id;

        foreach (array_combine($_FILES['photo']['name'], $_FILES['photo']['tmp_name']) as $photo => $tmp) {
            $ext = explode(".", $photo);
            var_dump($ext[1]);
             if(move_uploaded_file($tmp, "images/".$id."_".$i.".jpg")){
                photo::create([
                    'product_id' => $id,
                    'photo' => $id."_".$i.".".$ext[1]
                ]);
             } else{
            return "Error Uploading file";
            }
            $i++;
         } 
        return redirect()->route('products');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $photos = \DB::table('photos')->where('id', \DB::raw("(select max(`id`) from photos where product_id = {$id})"))->get();
        $i = explode("_", $photos[0] ->photo);
        $i = explode(".", $i[1]);
        $j = $i[0]+1;
        if($i == null){
            $j = 0;
        }
            $update = product::where('id', '=', $id)->update([
            'name' => $request->product_name,
            'type' => $request->product_category,
            'brand_name' => $request->brand_name,
            'description' => $request->product_description,
            //'stock' => $request->stock,
            'price' => $request->product_price
            ]);

          if(!empty($_FILES['photo'])){
            foreach (array_combine($_FILES['photo']['name'], $_FILES['photo']['tmp_name']) as $photo => $tmp) {
            $ext = explode(".", $photo);
             if(move_uploaded_file($tmp, "images/".$id."_".$j.".jpg")){
                photo::create([
                    'product_id' => $id,
                    'photo' => $id."_".$j.".".$ext[1]
                ]);
             } else{
            return "Error Uploading file";
            }
            $i++;
         }
          }
         return redirect()->route('products');
    }

    public function addToCart(Request $request)
    {
        $cart = array(
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->qty,
            'amt' => $request->price*$request->qty,
            'price' => $request->price,
            'lp' => $request->leftEye,
            'rp' => $request->rightEye,
            'photo' => $request->photo
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

    public function updateCart(Request $request)
    {
        $qty = $request->get('qty');
        $id = $request->get('id');
        $sessions = $request->session()->get('cart');
        $sessions[$id]['qty'] = $qty;
        $sessions[$id]['amt'] = $sessions[$id]['price']*$qty;
        $request->session()->put('cart', $sessions);
        return $request->session()->get('cart');
    }

    public function showCart(Request $request)
    {
        $sessions = $request->session()->get('cart');
        return $sessions;
    }

    public function getStock($id)
    {
        $prod = product::find($id);
        return $prod['stock'];
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
        $phots = Photo::where('product_id', '=', $id)->get();
        foreach ($photos as $photo) {
            unlink("images/".$photo->photo);
        }
        if(DB::table('products')->where('id', '=', $id)->delete()){
            return "Deleted";
        }
    }
}
