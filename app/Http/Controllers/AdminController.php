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
        return view('admin.survey');
    }

    public function createSurvey(Request $request){
        $survey = new Survey();
        $validated = $request->validate([
            'nama' => ['required',],
            'periode' => ['required', 'numeric'],
            'is_active' => ['required', 'in: 0,1'],
        ]);
        dd($validated);

    }
}
