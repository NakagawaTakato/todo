<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return redirect('/')->with('message', 'Todoを作成しました');
    }

    public function store(Request $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo);

        return redirect('/');
    }
}
