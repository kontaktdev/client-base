<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResponsiblePerson>
 */
class ResponsiblePersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => null,
            'name' => fake()->name,
            'position' => fake()->jobTitle,
            'phone' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail
        ];
    }
}
