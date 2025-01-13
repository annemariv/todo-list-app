<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index(){
        $todo = Todo::all();

        return view('index')->with('todos', $todo);
    }


    public function create(){
        return view('create');
    }


    public function details(Todo $todo){
        return view('details')->with('todos', $todo);
    }


    public function edit(Todo $todo){
        return view('edit')->with('todos', $todo);
    }


    public function update(Request $request, Todo $todo){
        $data = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['nullable', 'max:300']
        ]);

        $todo->name = $data['name'];
        $todo->description = $data['description'] ?? null;
        $todo->save();

        return redirect('/'); 
    }
    

    public function updateTodoCheck(Request $request, Todo $todo){
        $data = $request->validate([
            'todo_check' => ['nullable', 'boolean']
        ]);

        $todo->todo_check = $data['todo_check'] ?? 0;
        $todo->save();

        return redirect('/');
    }
  
    
    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }


    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['nullable', 'max:300']
        ]);

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'] ?? null;
        $todo->save();

        return redirect('/');
    }

}
