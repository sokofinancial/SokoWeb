<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Respondent extends Model
{
    protected $fillable = ['name', 'email', 'age', 'address', 'gender', 'occupation', 'score', 'session', 'total_score'];

    public function answers(): HasMany
    {
        return $this->hasMany(RespondentAnswer::class);
    }

    public function calculateTotalScore()
    {
        return $this->answers()->sum("answer_score");
    }
}
