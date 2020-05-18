<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        return view('pages.home', ['tasks'=>Task::all()]);
    }

//    public function index(){
//        $tasks = Task::all();
////        dd($tasks);
//        return view('pages.home', compact('tasks'));
//    }

    public function addTask() {
        return view('pages.add-task');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => ['required', 'max:255'],
            'description' =>['required'],
            'status' => ['required', 'boolean']
        ]);

        Task::create([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status')
        ]);
        return redirect('/');
    }


    public function editTask(Task $task){
        return view('pages.edit-task', ['task' => $task]);
    }


    public function storeUpdate(Request $request, Task $task){
        $request->validate([
            'title' => ['required', 'max:255'],
            'description' =>['required'],
            'status' => ['required', 'boolean']
        ]);

        $task->update($request->only(['title', 'description', 'status']));
        return redirect('/');
    }


    public function statusUpdate(Task $task){
        if ($task->status == '0'){
            $task->status = 1;
        } else {
            $task->status = 0;
        }
        $task->save();
        return redirect('/');
    }

    public function delete(Task $task) {
        $task->delete();
        return redirect('/');
    }

}
