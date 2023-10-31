<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'HDMI Cable',
            'price' => 50,
            'products_quantity' => 20,
            'category_id' => 1,
        ]);
        Product::create([
            'name' => 'USB Charging Cable',
            'price' => 25,
            'products_quantity' => 10,
            'category_id' => 1,
        ]);
        Product::create([
            'name' => 'Laptop',
            'price' => 100,
            'products_quantity' => 50,
            'category_id' => 2,
        ]);
        Product::create([
            'name' => 'Headphones',
            'price' => 70,
            'products_quantity' => 30,
            'category_id' => 2,
        ]);
        Product::create([
            'name' => 'Bookshelf',
            'price' => 60,
            'products_quantity' => 40,
            'category_id' => 3,
        ]);
        Product::create([
            'name' => 'Coffee Table',
            'price' => 80,
            'products_quantity' => 10,
            'category_id' => 3,
        ]);
        Product::create([
            'name' => 'Pens',
            'price' => 250,
            'products_quantity' => 20,
            'category_id' => 4,
        ]);
        Product::create([
            'name' => 'Notebooks',
            'price' => 60,
            'products_quantity' => 80,
            'category_id' => 4,
        ]);
        Product::create([
            'name' => 'Fiction Books',
            'price' => 40,
            'products_quantity' => 70,
            'category_id' => 5,
        ]);
        Product::create([
            'name' => 'Non-fiction Books',
            'price' => 50,
            'products_quantity' => 40,
            'category_id' => 5,
        ]);
        Product::create([
            'name' => 'Tape Measure',
            'price' => 90,
            'products_quantity' => 60,
            'category_id' => 6,
        ]);
        Product::create([
            'name' => 'Screwdriver Set',
            'price' => 25,
            'products_quantity' => 90,
            'category_id' => 6,
        ]);
        Product::create([
            'name' => 'Cabinet Knobs',
            'price' => 45,
            'products_quantity' => 20,
            'category_id' => 7,
        ]);
        Product::create([
            'name' => 'Door Locks',
            'price' => 35,
            'products_quantity' => 80,
            'category_id' => 7,
        ]);
        Product::create([
            'name' => 'Notepads',
            'price' => 85,
            'products_quantity' => 90,
            'category_id' => 8,
        ]);
        Product::create([
            'name' => 'Envelopes',
            'price' => 105,
            'products_quantity' => 10,
            'category_id' => 8,
        ]);
        Product::create([
            'name' => 'Insulation',
            'price' => 45,
            'products_quantity' => 50,
            'category_id' => 9,
        ]);
        Product::create([
            'name' => 'Plywood Sheets',
            'price' => 25,
            'products_quantity' => 30,
            'category_id' => 9,
        ]);
        Product::create([
            'name' => 'Dumbbells',
            'price' => 35,
            'products_quantity' => 40,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Yoga Mat',
            'price' => 50,
            'products_quantity' => 60,
            'category_id' => 10,
        ]);
    }
}
