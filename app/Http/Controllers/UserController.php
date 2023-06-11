<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\SubmitHistory;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function landingPage(){
        return view('landingPage');
    }
    public function dashboardPage()
    {
        $sum_survey=Survey::all()->count();
        return view('user.dashboard',["countData"=>[$sum_survey]]);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function surveyPage()
    {
        $surveys = DB::table('surveys AS s')
        ->select('*')
        ->where('is_active',1)
        ->whereRaw('(
            `s`.`limit` = 0 OR `s`.`limit` > (
            SELECT COUNT(`id_survey`) FROM `submithistory` WHERE `id_user` = ? AND `id_survey` = `s`.`id`
            ))', [auth()->user()->id])
        ->get();

        return view('user.survey', [
            'surveys' => $surveys,
        ]);
    }

    public function fillSurvey(int $id)
    {
        $survey = Survey::find($id);
        if($survey->limit != 0){
            $fillCount = DB::table('submithistory')
            ->where('id_user',auth()->user()->id )
            ->where('id_survey', $id)
            ->count();

            if($fillCount > $survey->limit){
                return redirect()
                ->route('user.survey')
                ->with('error', 'Max fill limit reached !');
            }
        }
        
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

        return view('user.fillsurvey', [
            'survey' => $survey,
            'questions' => $sortedq,
        ]);
    }

    public function submitSurvey(int $id, Request $request)
    {
        $survey = Survey::find($id);
        
        if($survey->limit != 0){
            $fillCount = DB::table('submithistory')
            ->where('id_user',auth()->user()->id )
            ->where('id_survey', $id)
            ->count();

            if($fillCount > $survey->limit){
                return redirect()
                ->route('user.survey')
                ->with('error', 'Max fill limit reached !');
            }
        }

        $questions_id = json_decode($survey->questions);
        $questions = collect(Question::findMany($questions_id));

        $answers = $request->collect();

        $submission = SubmitHistory::create([
            'id_user' => auth()->user()->id,
            'id_survey' => $survey->id,
        ]);
        if (!$submission) {
            return redirect()
                ->back()
                ->with('error', 'Gagal membuat submission ID');
        }

        $answerdata = [];
        foreach ($questions_id as $id) {
            $question = $questions->first(function ($value, int $key) use ($id) {
                if ($id == $value->id) {
                    return true;
                }
            });

            if ($question->type == 'checkbox') {
                $data = [
                    'id_submit' => $submission->id,
                    'id_survey' => $survey->id,
                    'id_question' => $id,
                    'content' => $answers->has('ans' . $id) && (!empty($answers['ans' . $id])  || $answers['ans' . $id] == 0) ?  json_encode($answers['ans' . $id]) : json_encode([]),
                ];
            } else {
                $data = [
                    'id_submit' => $submission->id,
                    'id_survey' => $survey->id,
                    'id_question' => $id,
                    'content' => $answers->has('ans' . $id) && (!empty($answers['ans' . $id])  || $answers['ans' . $id] == 0)  ? $answers['ans' . $id] : "",
                ];
            }

            array_push($answerdata, $data);
        }

        $check = Answer::insert($answerdata);
        if ($check) {
            return redirect()
                ->route('user.survey')
                ->with('success', 'Jawaban anda telah disimpan, terimakasih');
        }
        return redirect()
            ->back()
            ->with('error', 'Gagal mensubmit jawaban');
    }
}
