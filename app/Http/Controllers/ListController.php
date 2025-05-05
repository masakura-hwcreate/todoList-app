<?php

namespace App\Http\Controllers;

use App\Models\task_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task_lists = task_list::select('id', 'title', 'category')
            ->where('user_id', Auth::id())
            ->get();

        return view('lists.index', compact('task_lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'listTitle' => ['required', 'string', 'max:30'],
            'listCategory' => ['required', 'string', 'max:50'],
        ]);

        task_list::create([
            'user_id' => Auth::id(),
            'title' => $request->listTitle,
            'category' => $request->listCategory,
        ]);

        return redirect()->route('lists.index');
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
