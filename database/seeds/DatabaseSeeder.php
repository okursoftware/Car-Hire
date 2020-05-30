<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(ManufacturerSeeder::class);
         $this->call(CarModelSeeder::class);
         $this->call(VehicleCategorySeeder::class);
         $this->call(VehicleSeeder::class);
         $this->call(BookingStatusSeeder::class);
         $this->call(BookingSeeder::class);
    }
}
