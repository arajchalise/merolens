<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Client;
use DB;

class ClientsController extends Controller
{
    public function index()
    {
        $clients =  Client::All();
        return view('Clients.index', ['clients' => $clients]);
    }

    public function store(Request $request)
    {
        $client =  Client::create(array(
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'contact_no' => $request->contactNo,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postalCode,
            'password' => md5($request->password)
        ));

        $request->session()->put('client', $client);
        return redirect()->route('welcome');
    }

    public function clientsLogin(Request $request)
    {
        if($request->session()->has('client')){
            return redirect()->route('welcome');
        } else {
            return view('Clients.login');
        }
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $pass = md5($request->password);
        $client = DB::table('clients')
                            ->where('email', '=', $email)
                            ->where('password', '=', $pass)
                            ->get();
        if(!empty($client[0])){
            $request->session()->put('client', $client);
            return redirect()->route('welcome');
        } else {
            return "Password Mismatch";
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('client');
        return redirect()->route('welcome');
    }

    public function clientsRegister()
    {
        return view('Clients.register');
    }

    public function checkout(Request $request)
    {
        $sessions = $request->session()->get('cart');
        return view('Clients.checkout', ['sessions' => $sessions]);
    }

    public function billing()
    {
        return "We are Here";

    }
}
