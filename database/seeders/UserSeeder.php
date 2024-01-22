<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'John doe',
                'email' => 'john@gmail.com',
                'password' => Hash::make('john@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jane doe',
                'email' => 'jane@gmail.com',
                'password' => Hash::make('jane@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sachin T',
                'email' => 'sachin@gmail.com',
                'password' => Hash::make('sachin@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Virat K',
                'email' => 'virat@gmail.com',
                'password' => Hash::make('virat@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shibu L',
                'email' => 'shibu@gmail.com',
                'password' => Hash::make('shibu@123'),
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
