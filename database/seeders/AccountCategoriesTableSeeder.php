<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('account_categories')->insert([
            ['name' => 'Assets', 'description' => 'Resources owned by the business', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Liabilities', 'description' => 'Obligations owed by the business', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Equity', 'description' => 'Owner\'s share in the business', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Revenue', 'description' => 'Income from sales', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Expenses', 'description' => 'Operational costs', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
