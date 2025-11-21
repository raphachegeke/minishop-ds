<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@minishop.com',
            'password' => Hash::make('password123'),
        ]);

        // Create sample products
        Product::create([
            'name' => 'Laptop',
            'description' => 'Powerful laptop for work and gaming',
            'price' => 999.99,
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with great camera',
            'price' => 699.99,
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Headphones',
            'description' => 'Wireless noise-cancelling headphones',
            'price' => 199.99,
            'is_available' => true,
        ]);
    }
}