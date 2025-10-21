<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Entreprise>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'activity' => 'courses',
            'phone' => fake()->e164PhoneNumber(),
        ];
    }
}
