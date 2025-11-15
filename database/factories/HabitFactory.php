<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            'Ler 10 páginas',
            'Meditar por 15 minutos',
            'Fazer exercícios físicos',
            'Beber 2 litros de água',
        ];

        return [
            'user_id' => 1,
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
