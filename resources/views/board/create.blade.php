@extends('layout')

@section('title', "Liste de tableaux - Ajouter un tableau")

@section('content')
    <form class="p-0 m-0">
        <h1 class="ml-2 font-bold text-2xl my-2">Ajouter un nouveau tableau</h1>

        <div class="w-full">
            <div class=" flex flex-col w-fit mx-auto mb-3">
                <label for="">Nom de tableau<span class="text-red-500">*</span></label>
                <input type="text" placeholder="Eg: Projet de construction" class="px-2 py-1 border border-gray-300 rounded w-[400px]">
            </div>

            <button type="submit" class="bg-black text-white p-2 rounded block mx-auto  w-[400px]">Créer un tableau</button>

        </div>
    </form>
@endsection