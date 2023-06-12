<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users = [
            [
              'name' => 'employee',
              'email' => 'employee@test.com',
              'password' => Hash::make('password')   
            ],
            [
               'name' => 'customer',
               'email' => 'customer@test.com',
               'password' => Hash::make('password')        
            ]
        ];

        User::insert($users);
    }
}
