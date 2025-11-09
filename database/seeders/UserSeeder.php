<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Fulano de Tal',
            'email' => 'fulano@gmail.com',
            'password' => '123456'
        ]);
    }
}
