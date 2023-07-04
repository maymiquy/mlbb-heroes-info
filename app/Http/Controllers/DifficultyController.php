<?php

namespace App\Http\Controllers;

use App\Models\Difficulty;
use Illuminate\Http\Request;
use Illuminate\View\View;


class DifficultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $difficulties = Difficulty::all();
        
        return view('admin.difficulties.index',compact('difficulties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.difficulties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $difficulty = Difficulty::create($request->all());
        return redirect()->route('difficulties.index')->with('success', 'Difficulty created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Difficulty $difficulty): View
    {
        return view('admin.difficulties.show', compact('difficulty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Difficulty $difficulty): View
    {
        return view('admin.difficulties.edit', compact('difficulty'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Difficulty $difficulty)
    {
        $difficulty->update($request->all());
        return redirect()->route('difficulties.index')->with('success', 'Difficulty updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Difficulty $difficulty)
    {
        $difficulty->delete();
        return redirect()->route('difficulties.index')->with('success', 'Difficulty deleted successfully.');
    }
}
