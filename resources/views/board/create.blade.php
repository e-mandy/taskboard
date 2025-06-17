@extends('layout')

@section('title', "Liste de tableaux - Ajouter un tableau")

@section('content')
    <h1 class="ml-2 font-bold text-2xl my-2 lg:text-4xl lg:my-4">Ajouter un nouveau tableau</h1>
    <form action="{{ isset($board) ? route('board.update', $board) : route('board.store') }}" method="POST" class="p-0 m-0">
        @csrf
        @if(isset($board))
            @method('PUT')
        @endif
        <div class="w-full">
            <div class=" flex flex-col w-fit mx-auto mb-3">
                <label for="name">Nom de tableau<span class="text-red-500">*</span></label>
                <input type="text" name="name" placeholder="Eg: Projet de construction" id="name" value="{{ $board->name }}" class="px-2 py-1 border border-gray-300 rounded w-[400px] lg:w-[500px]">
            </div>

            <button type="submit" class="bg-black text-white p-2 rounded block mx-auto w-[400px] lg:w-[500px]">Créer un tableau</button>

        </div>
    </form>
@endsection