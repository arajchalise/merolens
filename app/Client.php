<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'address',
        'email',
        'contact_no',
        'password'
    ]; 

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
