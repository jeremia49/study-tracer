<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'nama' => 'bail|required',
            'fakultas'=> 'bail|required|in:fmipa',
            'jurusan'=> 'bail|required|in:matematika',
            'prodi' => 'bail|required|in:ilmu komputer',
            'nim' => 'bail|required|numeric|unique:App\Models\User,nim',
            'password' => 'bail|required|min:8|confirmed',
            'password_confirmation' => 'bail|required|'
        ]);

        $validated['role'] = 'responden';
        $validated['password'] = Hash::make($validated['password'] );

        $check = User::create($validated);

        if($check){
            return redirect()->route('login')->with('success','Akun anda berhasil didaftarkan , silahkan login');
        }

        return redirect()->back()->with('error','Something is Wrong');
    }
}
