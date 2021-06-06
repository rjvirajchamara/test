<?php

namespace Tests\Feature;

use App\Models\bus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class bussTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        bus::factory(18)->create();


        $response = $this->getJson('/bus');



        $response->assertJson (function(AssertableJson $json){

            $json->has('data',18);

        })
        ->assertJsonStructure([
             'data'=>[
                 '*'=>[
                     'id',
                     'title',
                     'created_at',
                     'updated_at'
                 ]
             ]

        ])

        ->assertStatus(200);
    }
}
