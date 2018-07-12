<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        //route model binding
        return view('task.show', compact('task'));
    }
}
