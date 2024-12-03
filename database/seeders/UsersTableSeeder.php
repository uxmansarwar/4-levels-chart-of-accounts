<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // List of users and their assigned roles
        $users = [
            [
                'name' => 'Uxman Sarwar',
                'email' => 'uxmansrwr@gmail.com',
                'password' => Hash::make('uxmansrwr@gmail.com')
            ],
            [
                'name' => 'Ehsan Ellahi',
                'email' => 'uxman.team0002@gmail.com',
                'password' => Hash::make('uxman.team0002@gmail.com')
            ],
            [
                'name' => 'An Employee',
                'email' => 'an_employee@gmail.com',
                'password' => Hash::make('an_employee@gmail.com')
            ]
        ];

        // Create each user and assign them a role
        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => $userData['password'],
                ]
            );

        }
    }
}
