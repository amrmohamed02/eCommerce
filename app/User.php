<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table='user';

    public function item()
    {
        return $this->hasMany('App\Item');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function rate()
    {
        return $this->hasOne('App\Rate');
    }

}
