<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboardPage()
    {
        return view('user.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function surveyPage()
    {
        $surveys = Survey::where('is_active', 1)
            ->orderBy('periode')
            ->get();
        return view('user.survey', [
            'surveys' => $surveys,
        ]);
    }

    public function fillSurvey(int $id)
    {
        $survey = Survey::find($id);
        $questions_id = json_decode($survey->questions);

        $questions = collect(Question::findMany($questions_id));

        $sortedq = [];
        foreach ($questions_id as $id) {
            $question = $questions->first(function ($value, int $key) use ($id) {
                if ($id == $value->id) {
                    return true;
                }
            });
            array_push($sortedq, $question);
        }

        // $sorted_q =
        return view('user.fillsurvey', [
            'survey' => $survey,
            'questions' => $sortedq,
        ]);
    }

    public function submitSurvey(int $id, Request $request){
        $survey = Survey::find($id);
        $questions_id = json_decode($survey->questions);

        $questions = collect(Question::findMany($questions_id));

        $sortedq = [];
        foreach ($questions_id as $id) {
            $question = $questions->first(function ($value, int $key) use ($id) {
                if ($id == $value->id) {
                    return true;
                }
            });
            array_push($sortedq, $question);
        }

        dd($request);

    }
}
