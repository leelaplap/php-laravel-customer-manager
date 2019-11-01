<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ["id",'name'];

    public function customers(){
        return $this->hasMany('App\Customer');
    }
}
