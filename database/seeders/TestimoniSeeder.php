<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonis = [
            [
                'name' => 'Testimoni 1',
                'kelas' => 'XII RPL 1',
                'testimoni' => 'Testimoni 1',
                'image' => 'https://via.placeholder.com/640x360.png',
            ],
            [
                'name' => 'Testimoni 2',
                'kelas' => 'XII RPL 2',
                'testimoni' => 'Testimoni 2',
                'image' => 'https://via.placeholder.com/640x360.png',
            ],
            [
                'name' => 'Testimoni 3',
                'kelas' => 'XII RPL 3',
                'testimoni' => 'Testimoni 3',
                'image' => 'https://via.placeholder.com/640x360.png',
            ],
        ];

        foreach ($testimonis as $testimoni) {
            Testimoni::create($testimoni);
        }
    }
}
