@extends('layout')

@section('title', "Liste de tableaux")

@section('content')
    <main class="w-screen">
        <div class="w-full px-1">
            <p class="text-lg py-2">Bon retour <span class="font-bold text-orange-600 uppercase">{{ Auth::user()->nom }}  {{ Auth::user()->prenom }}</span></p>
        </div>
        <div class="pb-6">
            <div class="px-1 flex justify-between">
                <h2 class="text-lg">Liste de tableaux</h2>
                <a href="#">Ajouter un tableau</a>
            </div>
            <hr>
        </div>
        <div class="w-full grid grid-cols-2 wrap gap-2 px-3 lg:grid-cols-4">
            @foreach($boards as $board)

                <a class="p-2 h-[100px] bg-gradient-to-r from-cyan-500 to-blue-500 border">
                    <p class="text-white font-bold"> {{ $board->name }} </p>
                </a>

            @endforeach
        </div>
        
    </main>

@endsection