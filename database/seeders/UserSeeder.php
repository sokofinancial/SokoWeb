<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        one user role admin
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'soko@gmail.com',
            'password' => bcrypt('password'),
            'gender' => 'Pria',
            'phone' => '08123456789',
            'address' => 'yogyakarta',
            'avatar' => 'https://icons.iconarchive.com/icons/papirus-team/papirus-status/512/avatar-default-icon.png',
            'role' => 'Admin'
        ]);
    }
}
