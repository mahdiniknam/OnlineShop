<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('123'), // هش کردن رمز عبور
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => Hash::make('1234'), // هش کردن رمز عبور
            'is_admin' => false
        ]);
        User::create([
            'name' => 'mahdi',
            'email' => 'mahdi@gmail.com.com',
            'password' => Hash::make('1234'), // هش کردن رمز عبور
            'is_admin' => false
        ]);
    }
}
