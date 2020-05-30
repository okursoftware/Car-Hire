<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarModel;
use Faker\Generator as Faker;

$factory->define(CarModel::class, function (Faker $faker) {
    $faker->addProvider(new App\Faker\CustomProvider($faker));
    return [
        'name'=> $faker->carModelName(),
        'code' => $faker->shuffle('123TGP4'),

    ];
});
