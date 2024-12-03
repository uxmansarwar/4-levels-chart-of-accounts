<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('accounts')->insert([
            ['account_detail_id' => 1, 'name' => 'Main Office Cash', 'description' => 'Cash in the main office', 'balance' => 5000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 2, 'name' => 'Branch Office Cash', 'description' => 'Cash in the branch office', 'balance' => 2000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 3, 'name' => 'Main Bank Account', 'description' => 'Primary bank account for transactions', 'balance' => 20000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 4, 'name' => 'Shop A Bank Account', 'description' => 'Transactions for Shop A', 'balance' => 15000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 5, 'name' => 'Amazon Sales Receivable', 'description' => 'Money due from Amazon sales', 'balance' => 3000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 6, 'name' => 'Installment Receivables', 'description' => 'Outstanding customer installments', 'balance' => 8000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 7, 'name' => 'Warehouse Inventory', 'description' => 'Stock in warehouse', 'balance' => 10000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 8, 'name' => 'Vendor Payables', 'description' => 'Amounts owed to suppliers', 'balance' => 6000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 9, 'name' => 'Business Loan Account', 'description' => 'Loan for business expansion', 'balance' => 25000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 10, 'name' => 'Owner Equity', 'description' => 'Initial owner investment', 'balance' => 50000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 11, 'name' => 'Owner Withdrawals', 'description' => 'Funds withdrawn by owners', 'balance' => -10000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 12, 'name' => 'Retained Earnings', 'description' => 'Profit reinvested in business', 'balance' => 12000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 13, 'name' => 'Online Sales Revenue', 'description' => 'Income from online platform sales', 'balance' => 15000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 14, 'name' => 'Shop Sales Revenue', 'description' => 'Income from physical shop sales', 'balance' => 20000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 15, 'name' => 'Installment Sales Revenue', 'description' => 'Revenue from installment sales', 'balance' => 10000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 16, 'name' => 'Rent Expenses', 'description' => 'Monthly rent for shop', 'balance' => -4000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 17, 'name' => 'Employee Salaries', 'description' => 'Monthly employee payments', 'balance' => -7000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 18, 'name' => 'Electricity Bills', 'description' => 'Utility expenses for office', 'balance' => -2000.00, 'created_at' => now(), 'updated_at' => now()],
            ['account_detail_id' => 19, 'name' => 'Marketing Expenses', 'description' => 'Advertising and promotions', 'balance' => -5000.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
