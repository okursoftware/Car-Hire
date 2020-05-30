<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['date_from','date_to','payment','confirmation_letter'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function vehicle()
    {
        return $this->belongsTo('App\Booking');
    }

    public function booking_status()
    {
        return $this->belongsTo('App\BookingStatus');
    }
}
