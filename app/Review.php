<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['client_id', 'product_id', 'rating', 'review'];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
