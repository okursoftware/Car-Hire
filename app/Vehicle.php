<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['mileage','engine_size'];

    public function vehicle_category()
    {
        return $this->belongsTo('App\VehicleCategory');
    }

    public function car_model()
    {
        return $this->belongsTo('App\CarModel');
    }

    public function bookings()
    {
        return $this->$this->hasMany('App\Booking');
    }

}
