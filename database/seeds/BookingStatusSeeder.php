<?php

use Illuminate\Database\Seeder;

class BookingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\BookingStatus::class)->create([
            'status' => 'IDLE',
        ]); Factory(App\BookingStatus::class)->create([
            'status' => 'CHARTERED',
        ]);
    }
}
