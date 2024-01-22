<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'product_name' => 'Moto C1',
                'price' => 11000,
                'available_number' => 25,
                'product_url' => '/mobiles/moto/c1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_name' => 'LG Oven',
                'price' => 15000,
                'available_number' => 10,
                'product_url' => '/oven/lg/oven1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_name' => 'Test product 3',
                'price' => 20000,
                'available_number' => 30,
                'product_url' => '/mobiles/test/product3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_name' => 'Test product 4',
                'price' => 31000,
                'available_number' => 25,
                'product_url' => '/test/product4.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_name' => 'Test product 5',
                'price' => 2000,
                'available_number' => 25,
                'product_url' => '/test/product5.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
