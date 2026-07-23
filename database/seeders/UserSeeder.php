<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Justin King', 'email' => 'getafixx149@gmail.com'],
            ['name' => 'Max King', 'email' => 'max@kortado.com.au'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => bcrypt('password'), // change this before anything goes live
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
