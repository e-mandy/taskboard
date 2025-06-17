<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BoardController::class, 'index'])->name('board.index');

Route::get('/tasks', [TaskController::class, 'index']);


Route::resource('task', TaskController::class);

Route::get('/boards', [BoardController::class, 'index'])->name('board.index');

Route::get('/register', function(){
    return view('auth.register');
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', function(){
    return view('auth.login');
});

Route::post('/login', [UserController::class, 'login'])->name('login');