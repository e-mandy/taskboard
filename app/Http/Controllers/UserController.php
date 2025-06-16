<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "nom" => ['required', 'max:255'],
            "prenom" => []
        ]);
    }
}
