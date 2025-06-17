@extends('auth.auth_layout')

@section('title', 'TODO - Login')

@section('content')

    <div class="w-screen px-3 sm:w-[500px]">
        <form action="{{ route('login') }}" method="POST" class="w-full flex flex-col items-center">
            @csrf
            <div>
                <h2 class="text-center text-4xl font-bold mb-2">Connexion</h2>
                <p class="text-center">Bienvenue sur TODO. Veuillez entrer vos informations pour rejoindre l'expérience.</p>
            </div>
            <div class="flex flex-col w-[80%] pb-4">
                <label for="">Email</label>
                <input type="email" name="email" id="email" placeholder="Eg. john@gmail.com" class="px-2 py-1 border border-gray-300 rounded">
            </div>
            <div class="flex flex-col w-[80%] pb-4">
                <label for="">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Eg. ********" class="px-2 py-1 border border-gray-300 rounded">
            </div>

            <button type="submit" class="bg-gray-700 w-[80%] rounded-md py-2 text-white">Se connecter</button>
        </form>
    </div>

@endsection