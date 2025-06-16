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
                        <a href="{{ route('task.edit', $task) }}" class="in-progress flex items-center w-full bg-[#F5D565] rounded-lg p-3 justify-between mb-5">
                            <div class="flex items-center gap-5">
                                <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/horloge.png') }}">
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-bold">{{ $task->name }}</h4>
                                    <p class="">{{ $task->description }}</p>
                                </div>
                            </div>
                            <img class="w-9 h-9 p-2 rounded-lg bg-[#EAA23A]" src="{{ asset('assets/images/Time_atack_duotone.svg') }}">
                        </a>
                        @break

                    @case('Completed')
                        <a href="{{ route('task.edit', $task) }}" class="in-progress flex items-center w-full bg-[#A0ECB1] rounded-lg p-3 justify-between mb-5">
                            <div class="flex items-center gap-5">
                                <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/athlete.png') }}">
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-bold">{{ $task->name }}</h4>
                                    <p>{{ $task->description }}</p>
                                </div>
                            </div>
                            <img class="w-9 h-9 p-2 rounded-lg bg-[#33D657]" src="{{ asset('assets/images/Done_round_duotone.svg') }}">
                        </a>
                        @break
                    
                        @case('Incompleted')
                            <a href="{{ route('task.edit', $task) }}" class="in-progress flex items-center w-full bg-[#F7D4D3] rounded-lg p-3 justify-between mb-5">
                                <div class="flex items-center gap-5">
                                    <img class="bg-white w-11 h-11 p-2 rounded-lg" src="{{ asset('assets/images/tea.png') }}">
                                    <div class="flex flex-col gap-1">
                                        <h4 class="font-bold">{{ $task->name }}</h4>
                                        <p>{{ $task->description }}</p>
                                    </div>
                                </div>
                                <img class="w-9 h-9 p-2 rounded-lg bg-[#DD524D]" src="{{ asset('assets/images/close_ring_duotone.svg') }}">
                            </a>
                        @break

                        @case('ToDo')
                            <a href="{{ route('task.edit', $task) }}" class="in-progress flex w-full bg-[#E3E8EF] gap-5 rounded-lg p-3 mb-5">
                                <img class="bg-white w-12 h-12 rounded-lg" src="{{ asset('assets/images/books.png') }}">
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-bold">{{ $task->name }}</h4>
                                    <p>{{ $task->description }}</p>
                                </div>
                            </a>
                        @break
                
                    @default
                        
                @endswitch
            @endforeach
        @endif
        
    
        <a href="{{ route('task.create') }}" class="addTasks bg-[#F5E8D5] w-full flex items-center p-3 rounded-lg gap-5 hover:border hover:border-[#EAA23A] cursor-pointer">
            <img class="w-10 h-10 p-2 rounded-lg bg-[#EAA23A]" src="{{ asset('assets/images/Add_round_duotone.svg') }}">
            <h4 class="font-bold">Add new task</h4>
        </a>
    </div>

@endsection