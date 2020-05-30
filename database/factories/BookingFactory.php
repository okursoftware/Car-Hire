<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'date_from' => $faker->dateTime(),
        'date_to' => $faker->dateTime(),
        'payment' => $faker->boolean(),
        'confirmation_letter' => $faker->boolean(),
    ];
});
