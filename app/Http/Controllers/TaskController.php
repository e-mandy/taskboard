<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function add($id){
        $tasks = Task::where('board_id', $id)->get();
        return view('task.taskcreate', [
            'tasks' => $tasks,
            'board_id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request, $id)
    {
        $request = $request->validated();
        Task::create($request, [
            'board_id' => $id
        ]);
        return to_route('board.show', $id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.taskcreate', [
            'task' => $task,
            'board_id' => $task->board_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $request = $request->validated();
        $task->update($request);
        return to_route('board.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return to_route('board.show');
    }
}
