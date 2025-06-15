@extends('layout')

@section('title', "Liste de tableaux")

@section('content')
    <main class="w-screen">
        <div class="w-full px-1">
            <p class="text-lg py-2">Bon retour <span class="font-bold text-orange-600 uppercase">John Doe</span></p>
        </div>
        <div class="pb-6">
            <h2 class="text-lg">Liste de tableaux</h2>
            <hr>
        </div>
        <div class="w-full grid grid-cols-2 wrap gap-2 px-3">
            <a class="p-2 h-[100px] bg-gradient-to-r from-cyan-500 to-blue-500 border">
                <p class="text-white font-bold">Projet de soutenance</p>
            </a>
            <a class="p-2 h-[100px] bg-gradient-to-r from-cyan-500 to-blue-500 border">
                <p class="text-white font-bold">Daily Code</p>
            </a>
            <a class="p-2 h-[100px] bg-gradient-to-r from-cyan-500 to-blue-500 border">
                <p class="text-white font-bold">Figma</p>
            </a>
            <a class="p-2 h-[100px] bg-gradient-to-r from-cyan-500 to-blue-500 border">
                <p class="text-white font-bold">Projet Farmus</p>
            </a>
        </div>
        
    </main>

@endsection