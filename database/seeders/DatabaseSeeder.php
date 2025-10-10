<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use App\Models\Enum\TypeProduct;
use App\Models\Enum\UserRole;
use App\Models\Product;
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

        Product::factory(5)->create([
            'product_type' => TypeProduct::BOOK
        ]);
        Product::factory(5)->create([
            'product_type' => TypeProduct::COURSE
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@domain.com',
            'password' => Hash::make('Admin@123'),
            'role' => UserRole::ADMIN
        ]);
    }
}
