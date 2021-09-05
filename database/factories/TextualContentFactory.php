<?php

namespace Database\Factories;

use App\Models\TextualContent;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextualContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TextualContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->sentence(6),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
