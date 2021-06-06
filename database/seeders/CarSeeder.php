<?php

namespace Database\Seeders;

use App\Models\car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    car::create([
        'name' => 'Hardik',
    ]);
    }
}
