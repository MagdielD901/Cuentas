<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Category;
use App\Models\Account;

class TransactionSeeder extends Seeder {
    public function run(): void {
        $user = User::first();
        $account = Account::first();
        $category = Category::first();

        Transaction::create([
            'ammount' => 500,
            'type' => 'income',
            'description' => 'mag',
            'user_id' => $user->id,
            'category_id' => $category->id,
            'account_id' => $account->id,
        ]);
    }
}
