<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand_name',
        'type',
        'description',
        'price'
    ];


    public function photo()
    {
        return $this->hasMany('App\Photo');
    }
}
