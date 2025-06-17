<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    public function index(){
        if(Auth::check()){
            $boards = Auth::user()->boards;
            return view('board.boards', compact('boards'));
        }else{
            return redirect()->route('login');
        }
        
    }

    public function create(){
        return view('board.create');
    }

    
}
