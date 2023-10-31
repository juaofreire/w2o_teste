<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Cable',
        ]);
        Category::create([
            'name' => 'Electronic',
        ]);
        Category::create([
            'name' => 'Furniture',
        ]);
        Category::create([
            'name' => 'Office Supplies',
        ]);
        Category::create([
            'name' => 'Books and Media',
        ]);
        Category::create([
            'name' => 'Tools',
        ]);
        Category::create([
            'name' => 'Hardware',
        ]);
        Category::create([
            'name' => 'Stationery',
        ]);
        Category::create([
            'name' => 'Building Supplies',
        ]);
        Category::create([
            'name' => 'Health and Fitness Equipment',
        ]);
    }
}
