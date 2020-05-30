<?php

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vehicle::class, 20)->make()->each(function ($vehicle) {
            $vehicleCategory = App\VehicleCategory::all()->random();
            $vehicle->vehicle_category()->associate($vehicleCategory);
            $carModel = App\CarModel::all()->random();
            $vehicle->car_model()->associate($carModel);
            $vehicle->save();
        });
    }
}
