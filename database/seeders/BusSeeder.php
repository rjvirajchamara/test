<?php

namespace Database\Seeders;

use App\Models\bus;
use Illuminate\Database\Seeder;


class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bus::factory(50)->create();
    }
}
