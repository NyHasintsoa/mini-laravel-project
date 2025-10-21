<?php

namespace Database\Factories\Product;

use App\Models\Product\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_size' => '56700',
            'file_path' => 'storage/products/files/files '.fake()->numberBetween(1, 5).'.pdf',
        ];
    }
}
