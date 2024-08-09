<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  
    public function index()
    {
       $task = Task::all();

       return view('task.index', compact('task'));
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return view('task.store', compact('task'));
    }

    
    public function show(string $id)
    {
        $task = Task::find($id);

        view('task.show', compact('task'));
    }
    
    public function update(Request $request, string $id)
    {
        $task = Task::update($request->all());

        return view('task.update', compact('task'));
    }

    public function destroy(string $id)
    {
        $task = Task::destroy($id);

       return view('task.destroy', compact('task'));
    }
}
