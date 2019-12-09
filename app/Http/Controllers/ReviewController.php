<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        $client = $request->session()->get('client');
        $product_id = $request->product_id;
        return $client[0]->id." : ".$product_id." : ".$request->review;
    }
}
