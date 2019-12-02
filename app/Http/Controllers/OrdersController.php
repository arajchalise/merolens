<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrdersController extends Controller
{
    public function index()
    {
        if(Auth::check()){
        $orders =  Order::All();
        return view('Orders.index', ['orders' => $orders]);
        } else {
            return redirect()->route('login');
        }
    }


    public function show(Order $order)
    {
        return Order::find($order->id);
    }

    public function makeOrder()
    {
        return Order::create(array(
            'productId' => 2,
            'clientsId' => 1,
            'shipping_address' => "Kirtipur",
            'total_amount' => 25.20
        ));
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id', '=', $id)->delete();
        return "Deleted";
    }
}
