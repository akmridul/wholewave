<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'products_list' => '[1,2]',
                'user_id' => 1,
                'total_cost' => 100.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[2,3]',
                'user_id' => 2,
                'total_cost' => 200.0,
                'status' => 'success',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[4]',
                'user_id' => 3,
                'total_cost' => 300.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[1,2]',
                'user_id' => 2,
                'total_cost' => 100.0,
                'status' => 'success',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[4]',
                'user_id' => 4,
                'total_cost' => 400.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[4]',
                'user_id' => 5,
                'total_cost' => 500.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[1]',
                'user_id' => 3,
                'total_cost' => 600.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[2]',
                'user_id' => 2,
                'total_cost' => 700.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[5]',
                'user_id' => 5,
                'total_cost' => 800.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[2]',
                'user_id' => 2,
                'total_cost' => 900.0,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'products_list' => '[4]',
                'user_id' => 1,
                'total_cost' => 1000.0,
                'status' => 'success',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
