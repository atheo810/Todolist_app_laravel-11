<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\TodoListMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;


Route::middleware([TodoListMiddleware::class])->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('index');
    Route::get('/create', [TodoController::class, 'create'])->name('create');
    Route::post('/store', [TodoController::class, 'store'])->name('store');
    Route::get('/details/{id}', [TodoController::class, 'details'])->name('details');
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
    Route::post('/logout', [UserController::class, 'logoutUser'])->name('logout');
});

Route::middleware([LoginMiddleware::class])->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');
    Route::post('/register', [UserController::class, 'registerPost'])->name('register.post');
});
