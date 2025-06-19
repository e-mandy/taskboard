<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('task', TaskController::class)->except('index', 'create');

Route::get('/task/add/{id}', [TaskController::class, 'add'])->name('task.add');

//Routes destinées à la gestion du board
Route::get('/boards', [BoardController::class, 'index'])->name('board.index');

Route::get('/boards/create', [BoardController::class, 'create'])->name('board.create');

Route::post('/boards/store', [BoardController::class, 'store'])->name('board.store');

Route::get('/boards/show/{id}', [BoardController::class, 'show'])->name('board.show');

Route::get('/boards/edit/{board}', [BoardController::class, 'edit'])->name('board.edit');

Route::put('boards/update/{board}', [BoardController::class, 'update'])->name('board.update');

Route::delete('boards/delete/{board}', [BoardController::class, 'destroy'])->name('board.destroy');

//Routes destinées à l'authentification

Route::get('/register', function(){
    return view('auth.register');
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', function(){
    return view('auth.login');
});

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');