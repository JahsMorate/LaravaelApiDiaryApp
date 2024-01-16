<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//retrieve data
Route::get('/diary', [DiaryController::class, 'index']);

//add data
Route::post('/data', [DiaryController::class, 'store']);

//show id
Route::get('/data/{id}', [DiaryController::class, 'show']);

//update data
Route::put('/data/{id}', [DiaryController::class, 'update']);

//delete data
Route::delete('/data/{id}', [DiaryController::class, 'destroy']);
