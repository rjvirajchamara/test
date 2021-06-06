<?php

namespace Database\Factories;

use App\Models\bookshop;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookshopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = bookshop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
