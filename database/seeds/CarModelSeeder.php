<?php

use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\CarModel::class, 15)->make()->each(function ($carModel) {
            $manufacturer = App\Manufacturer::all()->random();
            $carModel->manufacturer()->associate($manufacturer);
            $carModel->save();
       });
    }
}
