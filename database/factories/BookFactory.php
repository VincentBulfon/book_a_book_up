<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\TextualContent;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $txtContent = TextualContent::all()->shuffle();

        return [
            'title' => $this->faker->sentence(4),
            'textual_content_id' => $txtContent->take(1)->first()->id,
            'available'=> $this->faker->boolean(),
            'stock'=> $this->faker->numberBetween(0, 150),
            'isbn'=>$this->faker->isbn10(),
            'editor'=>$this->faker->company(),
        ];
    }
}
