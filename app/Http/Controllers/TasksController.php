<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function load()
    {
        $tasks = $this->getAll();
        return view('index', ['tasks' => $tasks]);
    }

    public function getAll()
    {
        return DB::table('tasks')->orderBy('id')->get();
    }

    public function create()
    {
        return view('tasks.new');
    }

    // Se veio por POST, eu posso receber o request nesse controlador
    public function store(Request $request)
    {
        // "dd" = debug, die
        //dd($request->all());

        $done = (isset($request->done));

        Task::create([
            'title' => $request->title,
            'text' => $request->text,
            'done' => $done,
            'status' => 0
        ]);

        $message = 'Tarefa adicionada com sucesso.';
        return view('tasks.success', ['message' => $message]);
    }

    public function show(Request $request)
    {
        $task = Task::findOrFail($request->id);
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Request $request)
    {
        $task = Task::findOrFail($request->id);

        $done = (isset($request->done));

        $task->update([
            'title' => $request->title,
            'text' => $request->text,
            'done' => $done,
            'status' => 0
        ]);

        return view('index', ['tasks' => $this->getAll()]);
    }

    public function do(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->update(['done' => true]);
        return view('index', ['tasks' => $this->getAll()]);
    }

    public function archive(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->update(['status' => 1]);
        return view('index', ['tasks' => $this->getAll()]);
    }

    public function delete(Request $request)
    {
        $task = Task::findOrFail($request->id);
        return view('tasks.delete', ['task' => $task]);
    }

    public function destroy(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->delete();

        $message = 'Tarefa excluída com sucesso!';
        return view('tasks.success', ['message' => $message]);
    }
}
