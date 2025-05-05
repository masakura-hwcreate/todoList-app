<?php

namespace App\Http\Controllers;

use App\Models\task_list;
use App\Models\task_card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cards.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = task_list::orderBy('category')->get();
        return view('cards.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => ['required', 'exists:task_lists,id'],
            'todoTitle' => ['required', 'string', 'max:60'],
        ]);

        task_card::create([
            'task_list_id' => $request->category_id,
            'title' => $request->todoTitle,
        ]);

        return redirect()->route('cards.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
