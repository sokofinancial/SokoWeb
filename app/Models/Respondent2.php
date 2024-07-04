<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Respondent2 extends Model
{
    protected $fillable = ['session', 'email', 'name', 'age', 'gender', 'address', 'status', 'question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'question7', 'question8', 'question9', 'question10', 'question11', 'question12', 'question13', 'total_score'];

    public function answers2(): HasMany
    {
        return $this->hasMany(RespondentAnswer::class);
    }

    public function calculateTotalScore()
    {
        return $this->answers()->sum("answer_score");
    }
}
