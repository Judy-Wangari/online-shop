<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name'=>'Admin',
        ]);

        Role::create([
            'name'=>'User',
        ]);

        User::create([
            'name' =>'Admin',
            'email' =>'admin@onlineshop.com',
            'phone' =>'0712345678',
            'delivery_address' =>'N/A',
            'role_id' =>1,
            'password' =>Hash::make('ADMIN123'),
        ]);

        User::create([
            'name' =>'Mel Kim',
            'email' =>'melkim@example.com',
            'phone' =>'0712345678',
            'delivery_address' =>'N/A',
            'role_id' =>2,
            'password' =>Hash::make('MEL12345'),
        ]);
        
     
    }   
}









































