<?php

namespace Database\Factories;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceProvider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->title(),
            'type_drone' => $this->faker->title(),
            'training' => $this->faker->title(),
            'sector' => $this->faker->title(),
        ];
    }
}
