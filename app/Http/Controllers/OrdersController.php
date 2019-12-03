<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrdersController extends Controller
{
    public function index()
    {
        // if(Auth::check()){
        $orders =  Order::where('status', '=', 0)->with('client')->get();
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

    public function makeOrder()
    {
        return Order::create(array(
            'product_id' => 2,
            'client_id' => 1,
            'shipping_address' => "Kirtipur",
            'total_amount' => 25.20,
            'status' => 0
        ));
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id', '=', $id)->delete();
        return "Deleted";
    }

    public function billing($id)
    {
        $order_Detail =  order::find($id)->with('client')->get();
        return view('Orders.billing', ['order_Detail' => $order_Detail]);
    }

    public function dispatchedOrder()
    {
        $orders =  Order::where('status', '=', 1)->with('client')->get();
        return view('Orders.dispatchedOrder', ['orders' => $orders]);
    }
}
