<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\View\View;


class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $specialties = Specialty::all();
        
        return view('specialties.index',compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('specialties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        Specialty::create($validatedData);
    
        return redirect('/specialties')->with('success', 'The Specialty added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialty $specialty): View
    {
        return view('specialties.show', compact('specialty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialty $specialty): View
    {
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialty $specialty)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $specialty->update($validatedData);
    
        return redirect('/specialties')->with('success', 'The Specialty updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();
    
        return redirect('/specialties')->with('success', 'The Specialty deleted successfully!');
    }
}
