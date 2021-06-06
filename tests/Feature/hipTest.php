<?php

namespace Tests\Feature;

use App\Models\miss;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class hipTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();

$response= $this->post('/miss',[
'titel'=>'test_test',
'content'=>'test conntec'

]);


$response->assertOk();
$this->assertCount(27,miss::all());
    }

    public function test_example1()
    {
        $this->withoutExceptionHandling();

$response= $this->put('/miss',[
    'id'=>25,
'titel'=>'viraj',
'content'=>'test conntec'

]);


$response->assertOk();
$response->assertStatus(200);
    }

    public function test_example3()
    {
        $this->withoutExceptionHandling();

$response= $this->post('/miss_delet',[
    'id'=>31]);


$response->assertOk();
$response->assertStatus(200);
    }

    public function test_example4()
    {
        $this->withoutExceptionHandling();

$response= $this->post('/joingdate');


$response->assertOk();
$response->assertStatus(200);
    }
}

