<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use App\Models\Enum\TypeProduct;
use App\Models\Enum\UserRole;
use App\Models\Product\Book;
use App\Models\Product\Course;
use App\Models\Product\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Entreprise::factory(10)->create();

        // Course::factory(10)->create();
        // for ($i=1; $i <= 10; $i++) {
        //     Product::factory(1, [
        //         'product_type' => TypeProduct::COURSE,
        //         'product_id' => $i
        //     ])->create();
        // }

        Book::factory(10)->create();
        for ($i = 1; $i <= 10; $i++) {
            Product::factory(1, [
                'product_type' => TypeProduct::BOOK,
                'product_id' => $i,
            ])->create();
        }

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@domain.com',
            'password' => Hash::make('Admin@123'),
            'role' => UserRole::ADMIN,
        ]);
    }
}
