<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
       /**
     * The name of factory's corresponding model.
     *
     * @var string
    */
    protected $model = \App\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_name' => $this->faker->text($maxNbChars = 30),
            'author_first_name' => $this->faker->word(),
            'author_second_name' => $this->faker->word(),
            'price' =>$this->faker->randomNumber(),
            'total_pages' =>$this->faker->randomNumber(),
        ];
    }
}
