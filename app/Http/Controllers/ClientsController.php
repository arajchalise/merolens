<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Client;

class ClientsController extends Controller
{
    public function index()
    {
        $clients =  Client::All();
        return view('Clients.index', ['clients' => $clients]);
    }

    public function store()
    {
        return Client::create(array(
            'name' => "Biraj",
            'address' => "Kirtipur",
            'email' => "biraj1@gmail.com",
            // 'contact_no' => "9841101935",
            'password' => Hash::make("12345678")
        ));
    }
}
