<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VehicleCategory;
use Faker\Generator as Faker;

$factory->define(VehicleCategory::class, function (Faker $faker) {
    $faker->addProvider(new App\Faker\CustomProvider($faker));
    return [
        'name' => $faker->categoryName,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
