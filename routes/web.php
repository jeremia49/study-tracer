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
    Route::get('/survey', [UserController::class, 'surveyPage'])->name('survey');
    Route::get('/fillSurvey/{id}', [UserController::class, 'fillSurvey'])->name('fillSurvey');
    Route::post('/fillSurvey/{id}', [UserController::class, 'submitSurvey'])->name('submitSurvey');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth','isAdmin'],
],function () {
    Route::get('/', [AdminController::class, 'dashboardPage'])->name('dashboard');
    Route::get('/survey', [AdminController::class, 'surveyPage'])->name('survey');
    Route::post('/createSurvey', [AdminController::class, 'createSurvey'])->name('createSurvey');
    Route::get('/editSurvey/{id}', [AdminController::class, 'surveyeditPage'])->name('surveyedit');
    Route::post('/editSurvey/{id}', [AdminController::class, 'editSurvey'])->name('editSurvey');
    Route::get('/deleteSurvey/{id}', [AdminController::class, 'deleteSurvey'])->name('deleteSurvey');
    Route::get('/editSurveyQuestions/{id}',[AdminController::class, 'editSurveyQuestionPage'])->name('surveyquestionedit');
    Route::post('/editSurveyQuestions/{id}',[AdminController::class, 'editSurveyQuestion'])->name('surveyquestionedit');
    
    
    Route::get('/question', [AdminController::class, 'questionsPage'])->name('questions');
    Route::post('/createQuestion', [AdminController::class, 'createQuestion'])->name('createQuestion');
    Route::get('/editQuestion/{id}', [AdminController::class, 'questioneditPage'])->name('questionedit');
    Route::post('/editQuestion/{id}', [AdminController::class, 'editQuestion'])->name('editQuestion');
    Route::get('/deleteQuestion/{id}', [AdminController::class, 'deleteQuestion'])->name('deleteQuestion');

    Route::post('/editOptions/', [AdminController::class, 'editOptions'])->name('editOptions');
    
    Route::get('/submissionsPage/{id}', [AdminController::class, 'submissionsPage'])->name('submissions');
    Route::get('/answers/{id}', [AdminController::class, 'answerPage'])->name('answers');
    
    
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('plogin');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('pregister');

// landing Pages
Route::get('/', [UserController::class, 'landingPage'])->name('index');