<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('account_details')->insert([
            ['account_type_id' => 1, 'name' => 'Cash on Hand', 'description' => 'Physical cash available', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 1, 'name' => 'Petty Cash', 'description' => 'Branch office cash', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 2, 'name' => 'Main Bank Account', 'description' => 'Primary business bank account', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 2, 'name' => 'Shop Bank Account', 'description' => 'Bank account for shop transactions', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 3, 'name' => 'Online Sales Receivable', 'description' => 'Amounts due from online platforms', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 3, 'name' => 'Installment Receivables', 'description' => 'Customer installment balances', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 4, 'name' => 'Finished Goods Inventory', 'description' => 'Products available for sale', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 5, 'name' => 'Vendor Payables', 'description' => 'Amounts owed to suppliers', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 6, 'name' => 'Bank Loans', 'description' => 'Loans for business expansion', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 7, 'name' => 'Owner Contributions', 'description' => 'Investment by owners', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 7, 'name' => 'Owner Withdrawals', 'description' => 'Funds taken by owners', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 8, 'name' => 'Retained Earnings', 'description' => 'Profits reinvested in the business', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 9, 'name' => 'Online Sales Revenue', 'description' => 'Revenue from online sales', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 9, 'name' => 'Shop Sales Revenue', 'description' => 'Revenue from shop sales', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 9, 'name' => 'Installment Sales Revenue', 'description' => 'Revenue from installment sales', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 10, 'name' => 'Rent Expense', 'description' => 'Monthly shop rent', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 11, 'name' => 'Employee Salaries', 'description' => 'Payments to employees', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 12, 'name' => 'Electricity Bill', 'description' => 'Main office electricity cost', 'created_at' => now(), 'updated_at' => now()],
            ['account_type_id' => 13, 'name' => 'Advertising', 'description' => 'Online and offline marketing', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
