<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jay',
            'email' => 'admin@nfcofe.com',
            'address' => 'Jl. Raya Cikarang - Cibarusah, Cikarang Selatan, Bekasi',
            'hp' => '081234567890',
            'password' => bcrypt('admin'),
            
        ])->assignRole('admin'); 
        
        User::create([
            'name' => 'Agus',
            'email' => 'agus27@gmail.com',
            'address' => 'Jln. Merpati No. 27, Cikarang Selatan, Bekasi',
            'hp' => '081294357870',
            'password' => bcrypt('customer'),
            
        ])->assignRole('customer'); 
    }
}
