@extends('layout')

@section('title', 'My Task Board | devChallenges.io')

@section('content')

    <div class="container w-full px-4 lg:w-[500px] m-auto">
        <div class="flex items-center gap-2 w-fit mt-8 mb-4">
            <img src="{{ asset('assets/images/Logo.svg') }}">
            <h1 class="text-4xl">My Task board</h1>
            <img src="{{ asset('assets/images/Edit_duotone.svg') }}">
        </div>
        <p class="mb-6 font-semibold">Tasks to keep organised</p>

        <div class="in-progress flex items-center w-full bg-[#F5D565] rounded-lg p-3 justify-between mb-5">
            <div class="flex items-center gap-5">
            <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/horloge.png') }}">
            <h4 class="font-bold">Task in Progress</h4>
            </div>
            <img class="w-9 h-9 p-2 rounded-lg bg-[#EAA23A]" src="{{ asset('assets/images/Time_atack_duotone.svg') }}">
        </div>


        <div class="in-progress flex items-center w-full bg-[#A0ECB1] rounded-lg p-3 justify-between mb-5">
            <div class="flex items-center gap-5">
            <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/athlete.png') }}">
            <h4 class="font-bold">Task Completed</h4>
            </div>
            <img class="w-9 h-9 p-2 rounded-lg bg-[#33D657]" src="{{ asset('assets/images/Done_round_duotone.svg') }}">
        </div>

        <div class="in-progress flex items-center w-full bg-[#F7D4D3] rounded-lg p-3 justify-between mb-5">
            <div class="flex items-center gap-5">
            <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/tea.png') }}">
            <h4 class="font-bold">Task Won't Do</h4>
            </div>
            <img class="w-9 h-9 p-2 rounded-lg bg-[#DD524D]" src="{{ asset('assets/images/close_ring_duotone.svg') }}">
        </div>

        <div class="in-progress flex w-full bg-[#E3E8EF] gap-5 rounded-lg p-3 justify-between mb-5">
            <img class="bg-white w-12 h-12 rounded-lg" src="{{ asset('assets/images/books.png') }}">
            <div class="flex flex-col gap-1">
                <h4 class="font-bold">Task To Do</h4>
                <p class="w-4/5">Work on a Challenge on devChallenge.io, learn Laravel and PHP.</p>
            </div>
        </div>
    
        <a href="#" class="addTasks bg-[#F5E8D5] w-full flex items-center p-3 rounded-lg gap-5 hover:border hover:border-[#EAA23A] cursor-pointer">
            <img class="w-10 h-10 p-2 rounded-lg bg-[#EAA23A]" src="{{ asset('assets/images/Add_round_duotone.svg') }}">
            <h4 class="font-bold">Add new task</h4>
        </a>
    </div>

    <div class="overlay"></div>

    <div class="task-details p-4 lg:w-[100px]">
        <div class="flex justify-between items-center mb-4">
            <h3>Task details</h3>
            <img class="close-details w-8 h-8 p-2 rounded-lg border border-gray-300 cursor-pointer" src="{{ asset('assets/images/close_ring_duotone-1.svg') }}">
        </div>

        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <label>Task name</label>
                <input class="border border-gray-300 p-2 text-black bg-white rounded" type="text" name="name">
            </div>

            <div class="flex flex-col mb-4">
                <label>Description</label>
                <textarea class="border border-gray-300 p-2 text-black bg-white rounded resize-none h-40" name="description" placeholder="Enter a short description"></textarea>
            </div>

            <div class="mb-4">
                <h4>Icon</h4>
                <div class="icons flex items-center gap-4">
                    <img class="w-11 h-11 p-2 rounded-lg bg-gray-300 active:bg-[#F5D565]" src="{{ asset('assets/images/athlete.png') }}">
                    <img class="w-11 h-11 p-2 rounded-lg bg-gray-300 active:bg-[#F5D565]" src="{{ asset('assets/images/books.png') }}">
                    <img class="w-11 h-11 p-2 rounded-lg bg-gray-300 active:bg-[#F5D565]" src="{{ asset('assets/images/tea.png') }}">
                    <img class="w-11 h-11 p-2 rounded-lg bg-gray-300 active:bg-[#F5D565]" src="{{ asset('assets/images/horloge.png') }}">
                </div>
            </div>

            <div>
                <h4>Status</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div class="px-2 py-2 border border-gray-300 rounded-lg">
                        <div>
                            <img src="">
                            <p>In progress</p>
                        </div>
                        <img src="">
                    </div>

                    <div class="px-2 py-2 border border-gray-300 rounded-lg">
                        <div>
                            <img src="">
                            <p>Completed</p>
                        </div>
                        <img src="">
                    </div>

                    <div class="px-2 py-2 border border-gray-300 rounded-lg">
                        <div>
                            <img src="">
                            <p>Won't do</p>
                        </div>
                        <img src="">
                    </div>
                </div>
            </div>

            <div w-full class="flex justify-end absolute bottom-2 right-5 gap-3">
                <button class="flex gap-2 items-center w-fit h-10 px-3 bg-gray-500 rounded-2xl">
                    <img class="w-5 h-5" src="{{ asset('assets/images/Trash.svg') }}">
                    <p>Delete</p>
                </button>
                <button type="submit" class="w-20 h-10 px-3 bg-blue-700 rounded-2xl" >Save</button>
            </div>
        </form>

        
    </div>

@endsection