<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('pages.home', compact('tasks'));
    }

    public function addTask() {
        return view('pages.add-task');
    }

    public function editTask(){
        return view('pages.edit-task');
    }

    public function store() {
        Task::create([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status')
        ]);
        return redirect('/');
    }
}
