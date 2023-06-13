<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\SubmitHistory;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboardPage()
    {
        $sum_survey=Survey::All()->count();
        $sum_responden=User::where('role','responden')->count();
        $sum_question=Question::All()->count();
        return view('admin.dashboard',["sumData"=>[$sum_survey,$sum_responden,$sum_question]]);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // Survey 
    public function surveyPage(){
        return view('admin.survey', [
            'surveys' => Survey::all(),
        ]);
    }

    public function createSurvey(Request $request){
        $validated = $request->validate([
            'nama' => ['required',],
            'periode' => ['required', 'numeric','integer'],
            'is_active' => ['required', 'in:0,1'],
            'limit' => ['required', 'numeric','integer', 'gte:0',]
        ]);

        $validated['questions'] = json_encode([]);

        $check = Survey::create($validated);
        if($check){
            return redirect()->route('admin.survey')->with('success','Survey berhasil ditambah !');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }

    public function editSurvey(string $id, Request $request){
        $validated = $request->validate([
            'nama' => ['required',],
            'periode' => ['required', 'numeric'],
            'is_active' => ['required', 'in:0,1'],
            'limit' => ['required', 'numeric','integer', 'gte:0',]
        ]);
        
        $survey = Survey::find($id);

        $survey->nama = $validated['nama'];
        $survey->periode = $validated['periode'];
        $survey->is_active = $validated['is_active'];
        $survey->limit = $validated['limit'];

        $check = $survey->save();
        if($check){
            return redirect()->route('admin.survey')->with('success','Survey berhasil disimpan !');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }

    public function deleteSurvey(string $id){
        $survey = Survey::find($id);
        $check = $survey->delete();
        if($check){
            return redirect()->route('admin.survey')->with('success','Survey berhasil dihapus !');
        }
        return redirect()->back()->with('error','Something is Wrong');
    }

    public function surveyeditPage(string $id){
        $survey = Survey::find($id);
        return view('admin.survey_edit', [
            'survey' => $survey,
        ]);
    }

    // Pertanyaan - Question
    public function questionsPage(){
        return view("admin.questions",[
            "questions" => Question::all(),
        ]);
    }

    public function createQuestion(Request $request){
        $validated = $request->validateWithBag('createQuestion',[
            'question' => ['required',],
            'type' => ['required','in:radio,radioOthers,checkbox,rate,text'],
            'is_mandatory' => ['required', 'in:0,1'],
        ]);

        $validated['options'] = json_encode([]);
        $check = Question::create($validated);
        if($check){
            return redirect()->route('admin.questions')->with('success','Pertanyaan berhasil ditambah !');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }

    public function editQuestion(string $id, Request $request){
        $validated = $request->validate([
            'question' => ['required',],
            'type' => ['required','in:radio,radioOthers,checkbox,rate,text'],
            'is_mandatory' => ['required', 'in:0,1'],
        ]);

        $question = Question::find($id);
        $question->question = $validated['question'];
        $question->type = $validated['type'];
        $question->is_mandatory = $validated['is_mandatory'];
        $check = $question->save();
        if($check){
            return redirect()->route('admin.questions')->with('success','Pertanyaan berhasil disimpan !');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }

    public function deleteQuestion(string $id){
        $question = Question::find($id);
        $check = $question->delete();
        if($check){
            return redirect()->route('admin.questions')->with('success','Pertanyaan berhasil dihapus !');
        }
        return redirect()->back()->with('error','Something is Wrong');
    }

    public function questioneditPage(string $id){
        $question = Question::find($id);
        return view('admin.question_edit', [
            'question' => $question,
        ]);
    }

    public function editOptions(Request $request){
        // dd($request);
        $validated = $request->validate([
            'id' => ['required','exists:questions,id'],
            'options' => ['nullable'],
        ]);
        if(!array_key_exists('options', $validated)){
            $validated['options'] = [];
        }
        
        $question = Question::find($validated['id']);
        $question->options = json_encode($validated['options'], JSON_HEX_TAG);

        $check = $question->save();
        if($check){
            return redirect()->route('admin.questions')->with('success','Opsi pertanyaan berhasil disimpan !');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }


    public function editSurveyQuestionPage($id){
        $survey = Survey::find($id);
        $questions = Question::all();
        return view('admin.survey_question_edit', [
            'survey' => $survey,
            'questions'=> $questions,
        ]);
    }

    public function editSurveyQuestion(int $id, Request $request){
        $survey = Survey::find($id);
        $validated = $request->validate([
            'idquestion' => ['nullable', 'exists:questions,id'],
        ]);
        if(!array_key_exists('idquestion', $validated)){
            $validated['idquestion'] = [];
        }
        $survey->questions = json_encode($validated['idquestion'], JSON_HEX_TAG);
        $check = $survey->save();
        if($check){
            return redirect()->route('admin.surveyquestionedit',['id'=>$survey->id])->with('success','Pertanyaan berhasil disimpan !');
        }

        return redirect()->back()->with('error','Something is Wrong');

    }

    public function submissionsPage(int $id)
    {
        $survey = Survey::find($id);
        $submissions = SubmitHistory::where('id_survey', $survey->id)->get();
        return view('admin.submissions', [
            'submissions' => $submissions,
            'survey'=>$survey,
        ]);
    }

    public function answerPage(int $id)
    {
        $submission = SubmitHistory::find($id);
        $survey = Survey::find($submission->id_survey);
        $questions_id = json_decode($survey->questions);

        $questions = collect(Question::findMany($questions_id));
        $answers = collect(DB::table('answers')->where('id_submit',$submission->id)->get());

        $sortedq = [];
        $sorteda = [];

        foreach ($questions_id as $id) {
            $question = $questions->first(function ($value, int $key) use ($id) {
                if ($id == $value->id) {
                    return true;
                }
            });
            $ans = $answers->first(function ($value, int $key) use ($id) {
                if ($id == $value->id_question) {
                    return true;
                }
            });

            array_push($sortedq, $question);
            array_push($sorteda, $ans);
        }
        
        return view('admin.answer', [
            'survey'=>$survey,
            'questions'=>$sortedq,
            'answers'=>$sorteda,
        ]);
    }

    public function respondenListPage(){
        $users = User::where('role','responden')->get();
        return view('admin.listuser', [
            'users' => $users,
        ]);
    }
    public function adminListPage(){
        $users = User::where('role','admin')->get();
        return view('admin.listadmin', [
            'users' => $users,
        ]);
    }


    
    
    


}
