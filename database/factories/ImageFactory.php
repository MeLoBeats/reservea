<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $imageable = $this->imageable();

        return [
            "url" => fake()->imageUrl(),
            "imageable_id" => $imageable::factory()->create()->id,
            "imageable_type" => $imageable,
        ];
    }

    public function imageable()
    {
        return fake()->randomElement([
            User::class,
            Offer::class
        ]);
    }
}
