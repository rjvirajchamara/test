<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\bookshop;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class booktest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/books',[

        'titel'=>'ekageike',
        'author'=>'virajchamara',
        ]);

        $response->assertOk();
        $this->assertCount(1,bookshop::all());

        }


    public function a_title_is_required(){

        $this->withoutExceptionHandling();

        $response = $this->post('/books',[

            'titel'=>'v',
            'author'=>'virajchamara',
            ]);

            $response->assertSessionHasErrors('title');

    }
}
