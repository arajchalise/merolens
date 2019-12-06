<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoldOrder extends Model
{
    protected $fillable = [
        'order_id', 'reason'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
