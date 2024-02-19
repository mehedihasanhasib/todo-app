<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;


class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->user()->id;
        return view('tasks', [
            'tasks' => Todo::all()->where('user_id', $id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tasks' => 'required|string|max:255',
        ]);

        $id = $request->user()->id;
        $todo = new ToDo;
        $todo->tasks = $validated['tasks'];
        $todo->user_id = $id;
        $todo->save();

        return redirect(route('tasks.index', ['added' => 'New task added successfully']));
    }

    /**
     * Display the specified resource.
     */
    public function show(ToDo $toDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tasks = ToDo::find($id);
        return view('edit', ['tasks' => $tasks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $status = ToDo::find($id);

        $new_task = $request->input('tasks');

        print_r($new_task);

        if (isset($new_task)) {
            $status->update([
                'tasks' => $new_task,
                'status' => '0'
            ]);
            return redirect(route('tasks.index', ['update' => 'Task updated successfully']));
        } else if ($status->status) {
            $status->update([
                'status' => '0',
            ]);
            return redirect(route('tasks.index', ['update' => 'Status updated successfully']));
        } else {
            $status->update([
                'status' => '1',
            ]);
            return redirect(route('tasks.index', ['update' => 'Status updated successfully']));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = ToDo::find($id);
        $task->delete();

        return redirect(route('tasks.index', ['deleted' => 'Task deleted successfully']));
    }
}
