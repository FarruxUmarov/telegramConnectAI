<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [QuestionController::class, 'index']);

Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
