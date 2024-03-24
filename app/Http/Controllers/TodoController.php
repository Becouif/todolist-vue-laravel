<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

// this are need to render things 
use Inertia\Inertia;
use Inertia\Response;

// this is need for redirectResponse 
// use in store 
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        // in resources>js>Pages>Todo 
        return Inertia::render('Todo/Index',[
            'todos' => Todo::latest()->get(),
        ]);
        // i will use defineProps(['todos']) to get it in the vue file
        // anthing i want to the vue page can be package with this and send 
        // i think i can add multiply things 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return Inertia::render('Todo/Create',[

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'todo' => 'required|string|max:255'
        ]);

        Todo::create([
            'todo'=> $request->get("todo"),
        ]);
        return redirect(route('todo.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return Inertia::render('Todo/Edit',[
            'todo' => Todo::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): Response
    {
        // return $request->input('todo');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $id = $todo->id;
        return $id;
    }
}
