<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\HoldOrder;

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
            'qty' => 2,
            'total_amount' => 25.20,
            'status' => 0
        ));
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
