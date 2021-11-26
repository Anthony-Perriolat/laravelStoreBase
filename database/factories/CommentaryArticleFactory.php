<?php

namespace Database\Factories;

use App\Models\CommentaryArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaryArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentaryArticle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content_commentary' => $this->faker->text(),
        ];
    }
}
