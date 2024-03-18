<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TodoController;

Route::get('/', function () {
    return view('welcome');
});

// $todos
Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/{id}', [TodoController::class, 'show']);
Route::post('/todo', [TodoController::class, 'store']);
Route::put('/todo/{id}', [TodoController::class, 'update']);
Route::post('/todo/{id}/update-status', [TodoController::class, 'updateStatus']);
Route::delete('/todo/{id}', [TodoController::class, 'destroy']);
