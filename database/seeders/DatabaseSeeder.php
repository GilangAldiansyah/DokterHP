<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Handphone;
use App\Models\Pelanggan;
use App\Models\Sparepart;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoleSeeder::class);
        $this->call(UserRole::class);

        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'gilang',
            'email' => 'gilang@gmail.com',
            'password' => bcrypt('gilang123')
        ]);

        User::create([
            'name' => 'mahen',
            'email' => 'mahen@gmail.com',
            'password' => bcrypt('mahen123')
        ]);
        
        User::create([
            'name' => 'nafis',
            'email' => 'nafis@gmail.com',
            'password' => bcrypt('nafis123')
        ]);
    }
}