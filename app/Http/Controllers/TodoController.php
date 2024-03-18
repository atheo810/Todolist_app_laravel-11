<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', compact('todos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'description' => 'string|required'
        ]);

        $todo = Todo::create(
            [
                'name' => $request->name,
                'description' => $request->description
            ]
        );
        return redirect()->route('index');
    }

    public function details(string $id)
    {
        $todo = Todo::where('id', $id)->select('id', 'name', 'description')->get();
        return view('details', compact('todo'));
    }
    public function edit(string $id)
    {
        $todo = Todo::where('id', $id)->select('id', 'name', 'description')->get();
        return view('edit', compact('todo'));
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        Todo::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->route('index');
    }
    public function delete(string $id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('index');
    }
}
