<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class project extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();
        $faker=Factory::create();


        $response = $this->getJson('/test1', [
            'name'=>$name=$faker->company,
            'slug'=>$slug=$faker->name,
            'price'=>$price = random_int(10,100)

        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('projects',[
            'name'=>$name,
            'slug'=>$slug,
            'price'=>$price
        ]);
    }
}
