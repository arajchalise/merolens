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
        'receipent_name',
        'receipent_contact',
        'receipent_email',
        'shipping_address',
        'qty',
        'total_amount',
        'status',
        'shipping_method',
        'payment_method'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }


    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function holdOrder()
    {
        return $this->hasOne('App\HoldOrder');
    }
}
