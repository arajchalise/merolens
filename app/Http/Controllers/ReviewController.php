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
        $review = $request->review;
        $client_id = $client[0]->id;

        Review::create([
            'product_id' => $product_id,
            'client_id' => $client_id,
            'review' => $review
        ]);
        return redirect()->back();
    }
}
