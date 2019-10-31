<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','dob','email','city_id'];
    public function city(){
        return $this->belongsTo('App\City');
    }
}
