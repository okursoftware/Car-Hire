<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable =['code','name'];

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

    public function vehicle()
    {
        return $this->hasOne('App\Vehicle');
    }
}
