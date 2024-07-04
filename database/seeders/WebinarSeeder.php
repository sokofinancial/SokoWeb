<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Webinar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        $webinars = [
            [
                'title' => 'Webinar Laravel 8',
                'description' => 'Webinar Laravel 8 adalah webinar yang membahas tentang fitur-fitur baru yang ada di Laravel 8',
                'slug' => 'webinar-laravel-8',
                'start_at' => now()->addDays(7),
                'end_at' => now()->addDays(7)->addHours(2),
                'image' => 'https://via.placeholder.com/640x360.png',
                'created_by' => $admin->id,
            ],
            [
                'title' => 'Webinar Laravel 9',
                'description' => 'Webinar Laravel 9 adalah webinar yang membahas tentang fitur-fitur baru yang ada di Laravel 9',
                'slug' => 'webinar-laravel-9',
                'start_at' => now()->addDays(14),
                'end_at' => now()->addDays(14)->addHours(2),
                'image' => 'https://via.placeholder.com/640x360.png',
                'created_by' => $admin->id,
            ],
            [
                'title' => 'Webinar Laravel 10',
                'description' => 'Webinar Laravel 10 adalah webinar yang membahas tentang fitur-fitur baru yang ada di Laravel 10',
                'slug' => 'webinar-laravel-10',
                'start_at' => now()->addDays(21),
                'end_at' => now()->addDays(21)->addHours(2),
                'image' => 'https://via.placeholder.com/640x360.png',
                'created_by' => $admin->id,
            ]
        ];

        foreach ($webinars as $webinar) {
            Webinar::create($webinar);
        }
    }
}
