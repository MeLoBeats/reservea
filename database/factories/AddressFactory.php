<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "address" => fake()->streetAddress,
            "country" => fake()->country,
            "city" => fake()->city,
            "postal_code" => fake()->postcode,
            "complements" => fake()->boolean(20) ? fake()->sentence : null
        ];
    }
}
