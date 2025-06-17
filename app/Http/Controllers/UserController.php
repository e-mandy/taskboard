<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'nom' => ['required', 'max:255'],
            'prenom' => ['required', 'max:255'],
            'email' => ['email', 'required']
        ]);

        if($request->password !== $request->password_confirm){
            return back()->with('error', "Le mot de passe n'est pas identique");
        }

        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return to_route('board.index');
    }

    public function login(Request $request){
        $request->validate([
            "email" => ['email', 'required']
        ]);

        if(!Auth::attempt($request->only('email', 'password'))){
            return to_route('login');
        }

        return to_route('board.index');
        
    }

    public function disconnect(){
        Auth::logout();

        return redirect()->route('login');
    }

}
