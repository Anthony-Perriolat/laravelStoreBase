<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'content_experience' => $this->faker->text(),
            'date_experience' => $this->faker->date(),
        ];
    }
}
