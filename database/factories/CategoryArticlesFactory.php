<?php

namespace Database\Factories;

use App\Models\CategoryArticles;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryArticlesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryArticles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->name(),
        ];
    }
}
