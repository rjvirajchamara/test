<?php

namespace Database\Seeders;

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
         \App\Models\bus::factory(10)->create();
        $this->call(BusSeeder::class);

       // \App\Models\prodecyt::factory()->create();
        $this->call(ProdecytSeeder::class);

        $this->call(CarSeeder::class);
    }
}
