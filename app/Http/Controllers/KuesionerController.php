<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Respondent;
use App\Models\Respondent2;
use App\Models\RespondentAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Exception;

class KuesionerController extends Controller
{
    public function home (){
        $question = Question::with('answers')->get();
        return view('kuesioner.home', compact(['question']));
    }

    public function home2 (){
        $question = Question::with('answers')->get();
        return view('kuesioner.home2', compact(['question']));
    }

    public function post2(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
            'question1' => 'required|integer',
            'question2' => 'required|integer',
            'question3' => 'required|integer',
            'question4' => 'required|integer',
            'question5' => 'required|integer',
            'question6' => 'required|integer',
            'question7' => 'required|integer',
            'question8' => 'required|integer',
            'question9' => 'required|integer',
            'question10' => 'required|integer',
            'question11' => 'required|integer',
            'question12' => 'required|integer',
            'question13' => 'required|integer',
        ]);

        // Generate UUID for session
        $sessionId = Str::uuid();
        Session::put('sess', $sessionId);
        // Session::put('sess', $session);

        // Calculate total score
        $total_score = array_sum([
            $validatedData['question1'],
            $validatedData['question2'],
            $validatedData['question3'],
            $validatedData['question4'],
            $validatedData['question5'],
            $validatedData['question6'],
            $validatedData['question7'],
            $validatedData['question8'],
            $validatedData['question9'],
            $validatedData['question10'],
            $validatedData['question11'],
            $validatedData['question12'],
            $validatedData['question13']
        ]);

        // Add total_score and session to validated data
        $validatedData['total_score'] = $total_score;
        $validatedData['session'] = $sessionId;

        // Attempt to create the respondent record
        try {
            Respondent2::create($validatedData);

            return Redirect::route("kuesioner.result2");
        } catch (Exception $e) {
            // Log the exception message for debugging
            Log::error('Error saving respondent: ' . $e->getMessage());

            // Return back with error message
            return $e->getMessage();
        }
    }


    public function result2 (){
        $respondent2 = Respondent2::where("session", "=", Session::get("sess"))->first();
        if ($respondent2 == null){
            return Redirect::route('kuesioner2');
        }
        if ($respondent2->total_score >= 33 ){
            $category = "Anda memiliki toleransi yang tinggi terhadap risiko";
        } elseif ($respondent2->total_score >= 29 ){
            $category = "Anda memiliki toleransi terhadap risiko di atas rata-rata ";
        } elseif ($respondent2->total_score >= 23 ){
            $category = "Anda memiliki toleransi risiko yang rata-rata/sedang";
        } elseif ($respondent2->total_score >= 19 ){
            $category = "Anda memiliki toleransi risiko di bawah rata-rata ";
        } else{
            $category = "Anda memiliki toleransi yang rendah terhadap risiko";
        }

        return view('kuesioner.result2', compact(['respondent2', 'category']));
    }

    public function post (Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'age' => 'required|numeric',
            'occupation' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string', // sesuaikan dengan opsi yang benar
            'name' => 'required|string',
        ]);

        $sessionId = Str::uuid()->toString();
        Session::put('sess', $sessionId);

        $validatedData['session'] = $sessionId;

        $newRespondent = Respondent::create($validatedData);

        $data = $request->all();
        foreach ($data as $key => $value) {
            if (strpos($key, 'quest') === 0) {
                $questionId = substr($key, 5);
                $score = Answer::where("id", "=", $value)->get();
                RespondentAnswer::create([
                    'question_id' => $questionId,
                    'answer_id' => $value,
                    'respondent_id'=> $newRespondent->id,
                    'answer_score'=>$score[0]->score
                ]);
            }
        }
        $totalScore = $newRespondent->calculateTotalScore();
        $newRespondent->update(['total_score' => $totalScore]);

        return Redirect::route("kuesioner.result");
    }

    public function result (){
        $respondent = Respondent::where("session", "=", Session::get("sess"))->first();
        if ($respondent == null){
            return Redirect::route('kuesioner');

        }
        $category = "";
        if ($respondent->total_score >= 33){
            $category = "Anda memiliki toleransi yang tinggi terhadap risiko";
        } elseif ($respondent->total_score >= 29 ){
            $category = "Anda memiliki toleransi terhadap risiko di atas rata-rata ";
        } elseif ($respondent->total_score >= 23 ){
            $category = "Anda memiliki toleransi risiko yang rata-rata/sedang";
        } elseif ($respondent->total_score >= 19 ){
            $category = "Anda memiliki toleransi risiko di bawah rata-rata ";
        } else{
            $category = "Anda memiliki toleransi yang rendah terhadap risiko";
        }

        return view('kuesioner.result', compact(['respondent', 'category']));
    }

    public function list ()
    {
        $respondents = Respondent::all();
        return view('kuesioner.list', compact(['respondents']));
    }
}
