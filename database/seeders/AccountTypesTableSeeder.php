<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('account_types')->insert([
            ['account_category_id' => 1, 'name' => 'Cash', 'description' => 'Physical cash on hand', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 1, 'name' => 'Bank Accounts', 'description' => 'Funds in bank accounts', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 1, 'name' => 'Accounts Receivable', 'description' => 'Money owed by customers', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 1, 'name' => 'Inventory', 'description' => 'Items available for sale', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 2, 'name' => 'Accounts Payable', 'description' => 'Money owed to vendors', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 2, 'name' => 'Loans', 'description' => 'Borrowed funds', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 3, 'name' => 'Owner Equity', 'description' => 'Owner\'s investment in the business', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 3, 'name' => 'Retained Earnings', 'description' => 'Profits reinvested in the business', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 4, 'name' => 'Sales Revenue', 'description' => 'Income from product sales', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 5, 'name' => 'Operational Expenses', 'description' => 'Costs related to operations', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 5, 'name' => 'Salaries and Wages', 'description' => 'Employee payments', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 5, 'name' => 'Utilities', 'description' => 'Bills for utilities', 'created_at' => now(), 'updated_at' => now()],
            ['account_category_id' => 5, 'name' => 'Marketing Expenses', 'description' => 'Advertising costs', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
