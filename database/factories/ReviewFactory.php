<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $building = Building::inRandomOrder()->first();
        return [
            'building_id' => $building->id,
            'user_id' => $user->id,
            'rating' => fake()->numberBetween(1, 5),

        ];
    }
}
