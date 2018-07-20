<?php

namespace App\Http\Controllers;

use App\Task;

class tasksController extends Controller
{
    public function index()
    {
        //$tasks = DB::table('tasks')->latest()->get();
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        // route model binding ^
        //$task = DB::table('tasks')->find($id);

        // $task = Task::find($id);
        //  dd($task);

        //return $task;

        return view('tasks.show', compact('task'));
    }
}
