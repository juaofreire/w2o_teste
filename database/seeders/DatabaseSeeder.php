<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('senha123'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('senha123'),
        ]);
        
        $this->call(CategorySeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(RegistrySeeder::class);
    }
}
