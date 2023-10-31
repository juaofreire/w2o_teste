<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registry;

class RegistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 20,
            'alteration' => 10,
            'product_id' => 7,
            'user_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 30,
            'alteration' => 5,
            'product_id' => 7,
            'user_id' => 1,
            'employee_id' => 6,
        ]);
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 25,
            'alteration' => 35,
            'product_id' => 7,
            'user_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 60,
            'alteration' => 60,
            'product_id' => 7,
            'user_id' => 2,
            'employee_id' => 5,
        ]);
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 0,
            'alteration' => 300,
            'product_id' => 7,
            'user_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 300,
            'alteration' => 10,
            'product_id' => 7,
            'user_id' => 2,
            'employee_id' => 4,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 290,
            'alteration' => 15,
            'product_id' => 7,
            'user_id' => 2,
            'employee_id' => 3,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 275,
            'alteration' => 75,
            'product_id' => 7,
            'user_id' => 2,
            'employee_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 200,
            'alteration' => 10,
            'product_id' => 7,
            'user_id' => 2,
            'employee_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 190,
            'alteration' => 170,
            'product_id' => 7,
            'user_id' => 1,
            'employee_id' => 6,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 50,
            'alteration' => 10,
            'product_id' => 3,
            'user_id' => 1,
            'employee_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 15,
            'product_id' => 3,
            'user_id' => 2,
            'employee_id' => 9,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 25,
            'alteration' => 25,
            'product_id' => 3,
            'user_id' => 2,
            'employee_id' => 7,
        ]);
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 0,
            'alteration' => 50,
            'product_id' => 3,
            'user_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 50,
            'alteration' => 10,
            'product_id' => 3,
            'user_id' => 1,
            'employee_id' => 5,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 10,
            'product_id' => 3,
            'user_id' => 2,
            'employee_id' => 3,
        ]);
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 30,
            'alteration' => 20,
            'product_id' => 3,
            'user_id' => 1,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 50,
            'alteration' => 10,
            'product_id' => 2,
            'user_id' => 1,
            'employee_id' => 9,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 20,
            'product_id' => 2,
            'user_id' => 2,
            'employee_id' => 8,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 20,
            'alteration' => 10,
            'product_id' => 2,
            'user_id' => 2,
            'employee_id' => 3,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 10,
            'alteration' => 10,
            'product_id' => 2,
            'user_id' => 1,
            'employee_id' => 9,
        ]);
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 0,
            'alteration' => 10,
            'product_id' => 2,
            'user_id' => 1,
            'employee_id' => 5,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 50,
            'alteration' => 10,
            'product_id' => 5,
            'user_id' => 1,
            'employee_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 35,
            'alteration' => 5,
            'product_id' => 4,
            'user_id' => 1,
            'employee_id' => 8,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 45,
            'alteration' => 5,
            'product_id' => 19,
            'user_id' => 2,
            'employee_id' => 7,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 70,
            'alteration' => 10,
            'product_id' => 20,
            'user_id' => 2,
            'employee_id' => 10,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 150,
            'alteration' => 10,
            'product_id' => 8,
            'user_id' => 1,
            'employee_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 140,
            'alteration' => 10,
            'product_id' => 8,
            'user_id' => 2,
            'employee_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 130,
            'alteration' => 10,
            'product_id' => 8,
            'user_id' => 1,
            'employee_id' => 3,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 120,
            'alteration' => 20,
            'product_id' => 8,
            'user_id' => 1,
            'employee_id' => 4,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 100,
            'alteration' => 10,
            'product_id' => 8,
            'user_id' => 2,
            'employee_id' => 5,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 90,
            'alteration' => 50,
            'product_id' => 8,
            'user_id' => 1,
            'employee_id' => 6,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 10,
            'product_id' => 8,
            'user_id' => 2,
            'employee_id' => 7,
        ]);
        Registry::create([
            'type' => 'entry',
            'initial_quantity' => 30,
            'alteration' => 60,
            'product_id' => 8,
            'user_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 90,
            'alteration' => 10,
            'product_id' => 8,
            'user_id' => 1,
            'employee_id' => 8,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 70,
            'alteration' => 10,
            'product_id' => 16,
            'user_id' => 2,
            'employee_id' => 9,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 60,
            'alteration' => 10,
            'product_id' => 16,
            'user_id' => 1,
            'employee_id' => 10,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 50,
            'alteration' => 10,
            'product_id' => 16,
            'user_id' => 2,
            'employee_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 20,
            'product_id' => 16,
            'user_id' => 1,
            'employee_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 20,
            'alteration' => 10,
            'product_id' => 16,
            'user_id' => 2,
            'employee_id' => 3,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 50,
            'alteration' => 10,
            'product_id' => 1,
            'user_id' => 1,
            'employee_id' => 4,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 15,
            'product_id' => 1,
            'user_id' => 2,
            'employee_id' => 5,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 25,
            'alteration' => 5,
            'product_id' => 1,
            'user_id' => 1,
            'employee_id' => 6,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 70,
            'alteration' => 10,
            'product_id' => 17,
            'user_id' => 2,
            'employee_id' => 7,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 60,
            'alteration' => 10,
            'product_id' => 17,
            'user_id' => 1,
            'employee_id' => 8,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 80,
            'alteration' => 40,
            'product_id' => 18,
            'user_id' => 2,
            'employee_id' => 7,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 40,
            'alteration' => 10,
            'product_id' => 18,
            'user_id' => 1,
            'employee_id' => 8,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 100,
            'alteration' => 5,
            'product_id' => 14,
            'user_id' => 1,
            'employee_id' => 4,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 95,
            'alteration' => 10,
            'product_id' => 14,
            'user_id' => 2,
            'employee_id' => 5,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 85,
            'alteration' => 5,
            'product_id' => 14,
            'user_id' => 1,
            'employee_id' => 6,
        ]);

        Registry::create([
            'type' => 'out',
            'initial_quantity' => 170,
            'alteration' => 10,
            'product_id' => 9,
            'user_id' => 2,
            'employee_id' => 9,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 160,
            'alteration' => 10,
            'product_id' => 9,
            'user_id' => 1,
            'employee_id' => 10,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 150,
            'alteration' => 10,
            'product_id' => 9,
            'user_id' => 2,
            'employee_id' => 1,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 140,
            'alteration' => 20,
            'product_id' => 9,
            'user_id' => 1,
            'employee_id' => 2,
        ]);
        Registry::create([
            'type' => 'out',
            'initial_quantity' => 120,
            'alteration' => 50,
            'product_id' => 9,
            'user_id' => 2,
            'employee_id' => 3,
        ]);
    }
}
