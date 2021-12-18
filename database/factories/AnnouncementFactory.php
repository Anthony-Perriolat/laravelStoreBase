<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;use Illuminate\Support\Str;use phpDocumentor\Reflection\Types\Integer;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'provide' => $this->faker->word(),
            'price' => $this->faker->numerify(),
        ];
    }
}
