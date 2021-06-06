<?php

namespace Database\Seeders;

use App\Models\prodecyt;
use Illuminate\Database\Seeder;

class ProdecytSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        prodecyt::factory(50)->create();
    }
}
