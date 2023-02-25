<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $tasks = Task::where('user_id', $user_id)->get();
        return view('tasks.index', [
            'tasks' => $tasks,    
        ]);
    }

    public function create()
    {
        $task = new Task;
        return view('tasks.create', [
            'task' => $task,    
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|max:10',
            'content' => 'required',
        ]);
        $user_id = Auth::id();
        $task = new Task;
        $task->status = $request->status;
        $task->content = $request->content;
        $task->user_id = $user_id;
        $task->save();
        return redirect('/');
    }


    public function show($id)
    {
        $user_id = Auth::id();
        $task = Task::findOrFail($id);
        if($user_id != $task->user_id){
            return redirect('/');
        }
        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    public function edit($id)
    {
        $user_id = Auth::id();
        $task = Task::findOrFail($id);
        if($user_id != $task->user_id){
            return redirect('/');
        }
        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|max:10',
            'content' => 'required',
        ]);
        $user_id = Auth::id();
        $task = Task::findOrFail($id);
        if($user_id != $task->user_id){
            return redirect('/');
        }
        $task->status = $request->status;
        $task->content = $request->content;
        $task->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $user_id = Auth::id();
        $task = Task::findOrFail($id);
        if($user_id != $task->user_id){
            return redirect('/');
        }
        $task->delete();
        return redirect('/');
    }
}
