<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            if(Auth::user()->role === "admin"){
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('user.dashboard');
        }
        return view('login');
    }


    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'nim' => ['required',],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt([
            'nim' => $credentials['nim'],
            'password' => $credentials['password'],
        ])) {
            $request->session()->regenerate();
 
            return redirect()->intended('/login');
        }
 
        return back()->withErrors([
            'nim' => 'The provided credentials do not match our records.',
        ])->onlyInput('nim');
    }
}
