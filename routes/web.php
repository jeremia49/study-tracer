<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'middleware' => ['auth'],
],function () {
    Route::get('/', [UserController::class, 'dashboardPage'])->name('dashboard');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth','isAdmin'],
],function () {
    Route::get('/', [AdminController::class, 'dashboardPage'])->name('dashboard');
    Route::get('/survey', [AdminController::class, 'surveyPage'])->name('survey');
    Route::get('/question', [AdminController::class, 'questionsPage'])->name('questions');
    
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('plogin');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('pregister');

Route::get('/', function(){
    return redirect()->route('login');
});