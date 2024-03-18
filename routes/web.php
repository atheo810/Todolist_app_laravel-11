<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/details/{id}', [TodoController::class, 'details']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::put('/update/{id}', [TodoController::class, 'update']);
Route::delete('/delete/{id}', [TodoController::class, 'delete']);
