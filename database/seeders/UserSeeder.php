<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'User',
                // 'email' => 'user@cambotutorial.com',
                'email' => 'user@gmail.com',
                'role' => 0,
                'infos' => 123, // Provide a valid value for the 'infos' field
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Editor',
                // 'email' => 'editor@cambotutorial.com',
                'email' => 'editor@gmail.com',
                'role' => 1,
                'infos' => 123, // Provide a valid value for the 'infos' field
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin',
                // 'email' => 'admin@cambotutorial.com',
                'email' => 'admin@gmail.com',
                'role' => 2,
                'infos' => 123, // Provide a valid value for the 'infos' field
                'password' => bcrypt('123456'),
            ],
        ];

        User::insert($users);
    }
}
