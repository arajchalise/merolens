<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'country',
        'city',
        'state',
        'postal_code',
        'email',
        'contact_no',
        'password'
    ]; 

    public function order()
    {
        return $this->hasMany('App\Order');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }
}
