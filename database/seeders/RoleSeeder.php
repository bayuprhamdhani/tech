<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $roles = [
        [1, "Admin"],
        [2, "Owner"],
        [3, "Developer"],
        [4, "User"],
        [5, "customer"],
        [6, "kasir"],
        [7, "vendor"],
        [8, "queen"],

    ];

    public function run(): void
    {
        foreach ($this->roles as $role) {
            \App\Models\Role::create([
                "id" => $role[0],
                "role_name" => $role[1],
            ]);
        }
    }
}
