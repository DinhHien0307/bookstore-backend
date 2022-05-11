<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => Author::factory(),
            'category_id' => Category::factory(),
            'publisher_id' => Publisher::factory(),
            'title' => $this->faker->title,
            'excerpt' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraph,
            'price' => $this->faker->randomDigit(),
            'images' => $this->faker->imageUrl(100,150)
        ];
    }
}
