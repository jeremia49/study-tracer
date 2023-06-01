<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardPage()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function surveyPage(){
        return view('admin.survey', [
            'surveys' => Survey::all(),
        ]);
    }

    public function createSurvey(Request $request){
        $validated = $request->validate([
            'nama' => ['required',],
            'periode' => ['required', 'numeric'],
            'is_active' => ['required', 'in: 0,1'],
        ]);

        $validated['questions'] = json_encode([]);

        $check = Survey::create($validated);
        if($check){
            return redirect()->route('admin.survey')->with('success','Survey berhasil ditambah !');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }

    public function editSurvey(string $id, Request $request){
        $survey = Survey::find($id);
        $validated = $request->validate([
            'nama' => ['required',],
            'periode' => ['required', 'numeric'],
            'is_active' => ['required', 'in: 0,1'],
        ]);

        $survey->nama = $validated['nama'];
        $survey->periode = $validated['periode'];
        $survey->is_active = $validated['is_active'];

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
    

    public function questionsPage(){
        return view("admin.questions");
    }

}
