<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CD;
use Illuminate\Support\Str;

class CDFactory extends Factory
{
    /**
     * The name of factory's corresponding model.
     *
     * @var string
    */
    protected $model = \App\Models\CD::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cd_title' => $this->faker->text($maxNbChars = 30),
            'first_name' => $this->faker->name(),
            'band' => $this->faker->word(),
            'price' =>$this->faker->randomNumber(),
            'playlength' =>$this->faker->randomNumber(),
        ];
    }
}
