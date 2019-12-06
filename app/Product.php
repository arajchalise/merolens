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
        'stock',
        'price'
    ];


    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }
}
