<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Seed 1 admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // ganti dengan yang kamu mau
        ]);

        // Seed 20 user random
        User::factory()->count(20)->create();
    }
}
