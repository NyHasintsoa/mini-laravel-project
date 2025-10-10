<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileDirectory = 'storage/app/public/products';
        return [
            'title' => fake()->text(50),
            'description' => fake()->sentence(50),
            'price' => fake()->randomFloat(2, 5000, 1000),
            'file_path' => fake()->file("$fileDirectory/files"),
            'image_path' => fake()->file("$fileDirectory/images"),
            'entreprise_id' => fake()->randomDigitNotZero(),
        ];
    }
}
