<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookingStatus;
use Faker\Generator as Faker;

$factory->define(BookingStatus::class, function (Faker $faker) {
    return [
        'description' => $faker->text(50)
    ];
});
