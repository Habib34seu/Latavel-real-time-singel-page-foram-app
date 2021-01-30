<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('question','App\Http\Controllers\QuestionController');
Route::apiResource('category','App\Http\Controllers\CaregoryController');
