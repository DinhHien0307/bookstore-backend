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
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'price' => $this->faker->randomNumber(),
            'published_at' => $this->faker->dateTime(),
            'images' => '/images/books/150x226/book' . $this->faker->randomDigit(),
            'isOnSale' => $this->faker->boolean(),
            'isFeatured' => $this->faker->boolean(),
            'view' => $this->faker->randomNumber(),
        ];
    }
}
