<?php

namespace Database\Seeders;

use App\Models\Habit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habit::factory()->count(3)->create();
    }
}
