<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Respondent;
use App\Models\RespondentAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespondentAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $respondent = Respondent::first();

        $questions = Question::all();

        foreach ($questions as $question) {
            $answer = $question->answers()->inRandomOrder()->first();

            RespondentAnswer::create([
                'respondent_id' => $respondent->id,
                'question_id' => $question->id,
                'answer_id' => $answer->id,
                'answer_score' => $answer->score,
            ]);
        }

        $totalScore = $respondent->calculateTotalScore();
        $respondent->update(['total_score' => $totalScore]);
    }
}
