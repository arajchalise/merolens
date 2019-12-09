<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Order;
use App\HoldOrder;
use App\Client;
use App\Product;

class OrdersController extends Controller
{
    public function index()
    {
        // if(Auth::check()){
        $orders =  Order::where('status', '=', 0)
                    ->with('client')
                    ->with('product')
                    ->get();
        //return $orders;
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
        



    }

    public function generateInvoice($order_id)
    {
        $i = 0;
        foreach ($order_id as $id) {
            $orders[$i] = Order::where('id', '=', $id)
                            ->with('client')
                            ->with('product')->get();
            $i++;
        }
        return view('Orders.invoice', ['orders' => $orders]);
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id', '=', $id)->delete();
        return "Deleted";
    }


    public function dispatchedOrder()
    {
        $orders =  Order::where('status', '=', 1)->with('client')->get();
        return view('Orders.dispatchedOrder', ['orders' => $orders]);
    }

    public function holdedOrder()
    {
        $orders =  Order::where('status', '=', -1)->with('client', 'holdOrder')->get();
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

        return HoldOrder::create([
            'order_id' => $id,
            'reason' => $reason
        ]);
    }
}
