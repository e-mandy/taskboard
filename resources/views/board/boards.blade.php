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
                <a href="{{ route('board.create') }}">Ajouter un tableau</a>
            </div>
            <hr>
        </div>
        <div class="w-full grid grid-cols-2 wrap gap-2 px-3 lg:grid-cols-4">
            @foreach($boards as $board)

                <div>
                    <a class="p-2 h-[100px] bg-gradient-to-r from-cyan-500 to-blue-500 flex mb-1    ">
                        <p class="text-white font-bold h-fit"> {{ $board->name }} </p>
                    </a>
                    <div class="flex justify-between">
                        <a href="{{ route('board.edit', $board) }}" class="flex gap-2 items-center">
                            <p class="text-lg">Modifier</p>
                            <img src="{{ asset('assets/images/edit.svg') }}" alt="" class="w-5 h-5">
                        </a>
                        <form action="{{ route('board.destroy', $board) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex gap-2 items-center bg-red-600 p-1 rounded">
                                <p class="text-lg text-white">Supprimer</p>
                                <img src="{{ asset('assets/images/Trash.svg') }}" class="w-5 h-5">
                            </button>
                        </form>
                    </div>
                    
                </div>
                

            @endforeach
        </div>
        
    </main>

@endsection