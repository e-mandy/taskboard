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

        @if (isset($tasks))
            @foreach ($tasks as $task)
                @switch($task->status)
                    @case('Progress')
                        <a href="{{ route('task.index') }}" class="in-progress flex items-center w-full bg-[#F5D565] rounded-lg p-3 justify-between mb-5">
                            <div class="flex items-center gap-5">
                                <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/horloge.png') }}">
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-bold">{{ $task->name }}</h4>
                                    <p class="w-4/5">{{ $task->description }}</p>
                                </div>
                            </div>
                            <img class="w-9 h-9 p-2 rounded-lg bg-[#EAA23A]" src="{{ asset('assets/images/Time_atack_duotone.svg') }}">
                        </a>
                        @break

                    @case('Completed')
                        <a href="{{ route('task.index') }}" class="in-progress flex items-center w-full bg-[#A0ECB1] rounded-lg p-3 justify-between mb-5">
                            <div class="flex items-center gap-5">
                                <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/athlete.png') }}">
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-bold">{{ $task->name }}</h4>
                                    <p class="w-4/5">{{ $task->description }}</p>
                                </div>
                            </div>
                            <img class="w-9 h-9 p-2 rounded-lg bg-[#33D657]" src="{{ asset('assets/images/Done_round_duotone.svg') }}">
                        </a>
                        @break
                    
                        @case('Incompleted')
                            <a href="{{ route('task.index') }}" class="in-progress flex items-center w-full bg-[#F7D4D3] rounded-lg p-3 justify-between mb-5">
                                <div class="flex items-center gap-5">
                                    <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/tea.png') }}">
                                    <div class="flex flex-col gap-1">
                                        <h4 class="font-bold">{{ $task->name }}</h4>
                                        <p class="w-4/5">{{ $task->description }}</p>
                                    </div>
                                </div>
                                <img class="w-9 h-9 p-2 rounded-lg bg-[#DD524D]" src="{{ asset('assets/images/close_ring_duotone.svg') }}">
                            </a>
                        @break

                        @case('ToDo')
                            <a href="{{ route('task.index') }}" class="in-progress flex w-full bg-[#E3E8EF] gap-5 rounded-lg p-3 justify-between mb-5">
                                <img class="bg-white w-12 h-12 rounded-lg" src="{{ asset('assets/images/books.png') }}">
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-bold">{{ $task->name }}</h4>
                                    <p class="w-4/5">{{ $task->description }}</p>
                                </div>
                            </a>
                        @break
                
                    @default
                        
                @endswitch
            @endforeach
        @endif
        
    
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
                <textarea class="border border-gray-300 p-2 bg-white rounded resize-none h-40" name="description" placeholder="Enter a short description"></textarea>
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
                    <label class="labelStatus flex justify-between items-center border border-gray-300 border-2 rounded-lg py-0.5 pl-0.5">
                        <input type="radio" name="status" class="status hidden" value="Progess">
                        <div class="flex items-center h-full gap-5">
                            <img class="w-11 h-11 p-2 rounded-lg bg-[#EAA23A]" src="{{ asset('assets/images/Time_atack_duotone.svg') }}">
                            <p>In Progress</p>
                        </div>
                        {{-- <img class="h-9 w-9 border border-blue-900" src="{{ asset('assets/images/Done_round_duotone.svg') }}"> --}}
                    </label>

                    <label class="labelStatus items-center border border-gray-300 border-2 rounded-lg py-0.5 pl-0.5">
                        <input type="radio" name="status" class="status hidden" value="Completed">
                        <div class="flex items-center h-full gap-5">
                            <img class="w-11 h-11 p-2 rounded-lg bg-[#33D657]" src="{{ asset('assets/images/Done_round_duotone.svg') }}">
                            <p>Completed</p>
                        </div>
                        {{-- <img src=""> --}}
                    </label>

                    <label class="labelStatus items-center border border-gray-300 border-2 rounded-lg py-0.5 pl-0.5">
                        <input type="radio" name="status" class="status hidden" value="Incompleted">
                        <div class="flex items-center h-full gap-5">
                            <img class="w-11 h-11 p-2 rounded-lg bg-[#DD524D]" src="{{ asset('assets/images/close_ring_duotone.svg') }}">
                            <p>Won't Do</p>
                        </div>
                        {{-- <img src=""> --}}
                    </label>

                    <label class="labelStatus items-center border border-gray-300 border-2 rounded-lg py-0.5 pl-0.5">
                        <input type="radio" name="status" class="status hidden" value="ToDo">
                        <div class="flex items-center h-full gap-5">
                            <img class="bg-[#E3E8EF] w-9 h-9 rounded-lg" src="{{ asset('assets/images/books.png') }}">
                            <p>To do</p>
                        </div>
                        {{-- <img src=""> --}}
                    </label>
                </div>
            </div>

            <div w-full class="flex justify-end absolute bottom-2 right-5 gap-3">
                <button class="flex gap-2 items-center w-fit h-10 px-3 bg-gray-500 rounded-2xl">
                    <img class="w-5 h-5" src="{{ asset('assets/images/Trash.svg') }}">
                    <p class="text-white">Delete</p>
                </button>
                <button type="submit" class="w-20 h-10 px-3 bg-blue-700 rounded-2xl text-white" >Save</button>
            </div>
        </form>

        
    </div>

@endsection