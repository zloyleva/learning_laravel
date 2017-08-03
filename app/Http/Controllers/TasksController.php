<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){

        return view('layouts.master');
    }

    public function show(Task $task){
//        $task = Task::find($id);
//        return $task;
        return view('tasks.show', compact('task'));
    }
}
