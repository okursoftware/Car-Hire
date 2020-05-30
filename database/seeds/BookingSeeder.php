<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Booking::class, 10)->make()->each(function ($booking) {
            $user = App\User::all()->random();
            $booking->user()->associate($user);
            $vehicle = App\Vehicle::all()->random();
            $booking->vehicle()->associate($vehicle);
            $bookingStatus = App\BookingStatus::all()->random();
            $booking->booking_status()->associate($bookingStatus);
            $booking->save();
        });
    }
}
