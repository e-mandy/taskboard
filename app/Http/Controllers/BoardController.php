<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        return view('board.boardscreate');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'max:255']
        ]);

        Board::create([
            'name' => $request->name,

            'user_id' => Auth::user()->id
        ]);

        return to_route('board.index');
    }

    public function edit(Board $board){
        return view('board.boardscreate', ['board' => $board]);
    }

    public function update(Board $board, Request $request){
        $validate = $request->validate([
            'name' => ['required', 'max:255']
        ]);

        $board->update($validate);

        return to_route('board.index');
    }

    
}
