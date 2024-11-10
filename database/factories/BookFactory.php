<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $images = [
            1 => 'image/b1.jpg',
            2 => 'image/b2.jpg',
            3 => 'image/b3.jpg',
            4 => 'image/b4.jpg',
            5 => 'image/b5.jpg',
            6 => 'image/c1.jpg',
            7 => 'image/c2.gif',
            8 => 'image/c3.jpg',
            9 => 'image/c4.jpg',
            10 => 'image/c5.jpeg',
            11 => 'image/n1.png',
            12 => 'image/n2.png',
            13 => 'image/n3.png',
            14 => 'image/n4.png',
            15 => 'image/n5.jpg',
        ];

        return [
            'image' => $images[fake()->numberBetween(1, 15)],
            'category_id' => Category::inRandomOrder()->first()->id,
            'author_id' => User::factory(),
            'title' => fake()->sentence(4, false),
            'price' => fake()->randomNumber(5, true),
            'description' => fake()->sentence(100, false)
        ];
    }
}
