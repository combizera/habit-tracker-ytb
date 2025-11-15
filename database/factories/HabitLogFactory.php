<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HabitLog>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'habit_id' => Habit::query()->inRandomOrder()->first()->id,
            'completed_at' => $this->faker->unique()->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
        ];
    }
}
