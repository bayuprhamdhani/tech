<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $transaction_statuses = [
        [1, "delivery"],
        [2, "not_delivery"],
    ];

    public function run(): void
    {
        foreach ($this->transaction_statuses as $transaction_status) {
            \App\Models\Transaction_Status::create([
                "id" => $transaction_status[0],
                "status" => $transaction_status[1],
            ]);
        }
    }
}
