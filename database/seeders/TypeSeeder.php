<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $types = [
        [1, "Senapan"],
        [2, "Bom"],
        [3, "Drone"],
    ];

    public function run(): void
    {
        foreach ($this->types as $type) {
            \App\Models\Product_Type::create([
                "id" => $type[0],
                "Product_Type" => $type[1],
            ]);
        }
    }
}
