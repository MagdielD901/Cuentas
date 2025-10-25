<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\User;

class AccountSeeder extends Seeder {
    public function run(): void {
        $user = User::first();

        Account::create([
            'name' => 'Cuenta principal',
            'ammount' => 1000,
            'status' => 'active',
            'user_id' => $user->id,
        ]);
    }
}
