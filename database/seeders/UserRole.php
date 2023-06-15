<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            ]);

            $admin->assignRole(1);


            $user = User::create([
            'name' => 'gilang',
            'email' => 'gilang@gmail.com',
            'password' => bcrypt('gilang123'),
            ]);
            $user->assignRole(2);

            $user = User::create([
            'name' => 'mahen',
            'email' => 'mahen@gmail.com',
            'password' => bcrypt('mahen123'),
            ]);
            $user->assignRole(2);

            $user = User::create([
            'name' => 'nafis',
            'email' => 'nafis@gmail.com',
            'password' => bcrypt('nafis123'),
            ]);
            $user->assignRole(2);
            
    }
}