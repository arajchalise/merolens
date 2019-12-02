<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'productId',
        'clientsId',
        'left_eye_power',
        'right_eye_power',
        'shipping_address',
        'total_amount',
        'status'
    ];
}
