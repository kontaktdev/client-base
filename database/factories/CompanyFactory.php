<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'vat' => $this->vat(),
            'address' => fake()->address,
            'city' => fake()->city,
            'zipcode' => fake()->postcode,
            'country' => fake()->country,
            'phone' => fake()->phoneNumber,
            'mobile' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail,
            'website' => fake()->url,
            'description' => fake()->paragraph
        ];
    }

    /**
     * @return string
     */
    private function vat(): string {
        $countryCode = fake()->countryCode;
        $vatNumber = fake()->randomNumber(9);
        return $countryCode . $vatNumber;
    }
}
