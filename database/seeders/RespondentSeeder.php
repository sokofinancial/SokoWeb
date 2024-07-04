<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Respondent;
use App\Models\RespondentAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $respondent = Respondent::create([
            'name' => 'John Doe',
            'session'=> Str::uuid()->toString(),
            'email' => 'john@example.com',
            'age' => 30,
            'occupation' => 'Engineer',
            'gender' => 'male',
            'address' => 'yogyakarta',
            'total_score' => 0
        ]);

        $totalScore = $respondent->calculateTotalScore();
        $respondent->update(['total_score' => $totalScore]);
    }
}
