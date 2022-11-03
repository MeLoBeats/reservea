<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Category;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->sentence,
            "description" => fake()->paragraphs(3, true),
            "price" => rand(60, 2000),
            "category_id" => FactoryHelper::getRandomIdOrCreate(Category::class),
            "address_id" => FactoryHelper::getRandomIdOrCreate(Address::class),
            "user_id" => FactoryHelper::getRandomIdOrCreate(User::class),
        ];
    }
}
