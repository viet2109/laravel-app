<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => User::factory(),
            'slug' => fn (array $attrs) => Str::slug($attrs['title']),
            'title' => $this->faker->unique()->sentence(4),
            'description' => $this->faker->paragraph(),
            'body' => $this->faker->text(),
        ];
    }
}