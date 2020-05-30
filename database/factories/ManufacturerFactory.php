<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manufacturer;
use Faker\Generator as Faker;

$factory->define(Manufacturer::class, function (Faker $faker) {
    $faker->addProvider(new App\Faker\CustomProvider($faker));
    return [
        'code' =>$faker->shuffle('7HABC96FH4'),
        'name' => $faker->manufacturerName,
        'details' => $faker->text(50)
    ];
});
