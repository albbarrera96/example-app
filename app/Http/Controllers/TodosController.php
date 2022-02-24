<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    //
    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:100', 'min:3'],
        ]);
        $todo = new Todo;
        $todo ->name = $request->name;
        $todo ->save();

        return redirect()->route('todos')->with('success', '¡Tarea creada!');
    }

    public function index(){

        $todos = Todo::all();
        return view('landing-page', ['todos' => $todos]);
    }

    public function show($id){

        $todo = Todo::find($id);
        return view('show', ['todo' => $todo]);
    }

    public function update(Request $request){

        $todo = Todo::find();
        $todo->id =$request->id;
        $todo->name = $request->name;
        $todo->save();

        return view('landing-page', ['success' => 'tarea actualizada']);
    }

    public function delete($id){

        $todo = Todo::find($id);
        $todo ->delete();

        return redirect()->route('todos')->with('success', '¡Tarea eliminada!');
    }

}
