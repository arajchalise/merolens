<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Order;
use App\HoldOrder;
use App\Client;
use App\Product;
use DB;

class OrdersController extends Controller
{
    public function index()
    {
        // if(Auth::check()){
        $orders =  Order::where('status', '=', 0)
                    ->with('client')
                    ->with('product', 'Product.photo')
                    ->paginate(20);
        // return $orders;
        return view('Orders.index', ['orders' => $orders]);
        // } else {
        //     return redirect()->route('login');
        // }
    }


    public function show(Order $order)
    {
        return Order::find($order->id);
    }

    public function makeOrder(Request $request)
    {
        $id = 0;
        if($request->session()->has('client')){
            $client = $request->session()->get('client');
            $id = $client[0]->id;
        } else {
            $client = Client::where('email', '=', $request->email)->get();
            if(!empty($client[0])){
                if(md5($request->password) == $client[0]->password){
                    $id =  $client[0]->id;
                } else {
                    return "password mismatch";
                }
            } else {
                $id = Client::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'address' => $request->address,
                'country' =>$request->country,
                'city' => $request->city,
                'state' => $request->state,
                'postal_code' => $request->postalCode,
                'contact_no' => $request->contactNo,
                'email' => $request->email,
                'password' => md5($request->password)
            ])->id;
            }
        }
            if($request->ship =='Y'){
            $rName = $request->sFirstName." ".$request->sLastName;
            $rContact = $request->sContactNo;
            $rEmail = $request->sEmail;
            $sAddress = $request->sAddress.", ".$request->sCity.", ".$request->sState.", ".$request->sCountry." ".$request->sPostalCode;

        } else {
            $rName = $request->firstName." ".$request->lastName;
            $rContact = $request->contactNo;
            $rEmail = $request->email;
            $sAddress = $request->address.", ".$request->city.", ".$request->state.", ".$request->country." ".$request->postalCode;

        }
            $sessions = $request->session()->get('cart');
            $i = 0;
            foreach ($sessions as $session) {
                $order_id[$i] = Order::create([
                        'product_id' => $session['id'],
                        'client_id' => $id,
                        'left_eye_power' => $session['lp'],
                        'right_eye_power' => $session['rp'],
                        'receipent_name' => $rName,
                        'receipent_contact' => $rContact,
                        'receipent_email' => $rEmail,
                        'shipping_address' => $sAddress,
                        'qty' => $session['qty'],
                        'total_amount' => $session['amt'],
                        'status' => 0,
                        'shipping_method' => $request->shippingMethods,
                        'payment_method' => $request->paymentMethod 
                ])->id;
                $product = product::find($session['id']);
                product::where('id', '=', $session['id'])->update([
                    'stock' => $product->stock - $request->qty
                ]);
                $i++;
            }
            $request->session()->forget('cart');
            return $this->generateInvoice($order_id);
    }

    public function generateInvoice($order)
    {
        $i = 0;
        foreach ($order as $id) {
            $orders[$i] = Order::where('id', '=', $id)
                        ->with('client')
                        ->with('product', 'product.photo')
                        ->get();
            $i++;
        }
        return view('Orders.invoice', ['orders' => $orders]);
        // return $orders[0];
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id', '=', $id)->delete();
        return "Deleted";
    }


    public function dispatchedOrder()
    {
        $orders =  Order::where('status', '=', 1)
                        ->orderBy('id', 'DESC')
                        ->with('client')
                        ->paginate(20);
        return view('Orders.dispatchedOrder', ['orders' => $orders]);
    }

    public function holdedOrder()
    {
        $orders =  Order::where('status', '=', -1)
                          ->orderBy('id', "DESC")
                          ->with('client', 'holdOrder')
                          ->paginate(20);
        return view('Orders.holdOrders', ['orders' => $orders]);
    }

    public function dispatch($id)
    {
        Order::where('id', $id)
             ->update(['status' => 1]);
        return redirect()->route('orders');
    }


    public function hold(Request $request)
    {
        $id = $request->id;
        $reason = $request->reason;
        Order::where('id', $id)
             ->update(['status' => -1]);

        HoldOrder::create([
            'order_id' => $id,
            'reason' => $reason
        ]);

        return redirect()->route('orders');
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $orders =  DB::select(DB::raw("SELECT * FROM (SELECT orders.id, products.name, clients.first_name, clients.last_name, orders.qty, orders.total_amount, orders.left_eye_power, orders.right_eye_power, orders.shipping_address, orders.receipent_name, orders.status FROM `orders`, `products`, `clients` WHERE orders.product_id = products.id AND orders.client_id = clients.id)AS ord WHERE ord.status = 0 AND ord.name LIKE '%$q%'"));
        //print_r($q);
        return view('Orders.index', ['orders' => $orders]);
    }
}
