<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $statuses = [
        [1, "Active"],
        [2, "Inactive"],
    ];

    public function run(): void
    {
        foreach ($this->statuses as $status) {
            \App\Models\Status::create([
                "id" => $status[0],
                "status" => $status[1],
            ]);
        }
    }
}
