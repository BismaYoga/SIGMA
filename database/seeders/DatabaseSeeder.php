<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@sigma.com',
            'password' => Hash::make('admin123'), 
            'role' => 'admin', // Menetapkan role 'admin'
        ]);
        $this->call([
            BookingSeeder::class,
            // Tambahkan seeder lain di sini jika ada
        ]);
    }
}