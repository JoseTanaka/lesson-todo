<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $todos = $this->todo->all();
        return view('todo.index',compact('todos'));
    }
}