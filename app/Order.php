<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'client_id',
        'left_eye_power',
        'right_eye_power',
        'shipping_address',
        'qty',
        'total_amount',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function holdOrder()
    {
        return $this->hasOne('App\HoldOrder');
    }
}
