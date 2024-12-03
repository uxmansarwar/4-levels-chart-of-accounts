<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersTableSeeder::class);
        $this->call(AccountCategoriesTableSeeder::class);
        $this->call(AccountTypesTableSeeder::class);
        $this->call(AccountDetailsTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
    }
}
