<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);


Route::resource('task', TaskController::class);

Route::get('/boards', [BoardController::class, 'index'])->name('board.index');

Route::get('/register', function(){
    return view('auth.register');
});

Route::get('/login', function(){
    return view('auth.login');
});