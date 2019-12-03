<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'level'
    ];

    public function User()
    {
        return $this->hasMany('App\User');
    }
}
