<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable =['code','name','details'];

    public function car_model()
    {
        return $this->hasMany('App\CarModel');
    }
}
