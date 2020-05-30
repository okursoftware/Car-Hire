<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'mileage'=>$faker->numberBetween(1000,125000),
        'engine_size' =>$faker->randomFloat(1,1,5)
    ];
});
