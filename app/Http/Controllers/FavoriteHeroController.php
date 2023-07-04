<?php

namespace App\Http\Controllers;

use App\Models\FavoriteHero;
use App\Models\User;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FavoriteHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $favoriteheroes = FavoriteHero::all();
        
        return view('admin.favoriteheroes.index',compact('favoriteheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users = User::all();
        $heroes = Hero::all();
        return view('admin.favoriteheroes.create', compact(('users'),('heroes')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'users_id' => 'required',
            'heroes_id' => 'required',
            'date' => 'required',
            'notes' => 'required',
            'rating' => 'required|numeric',
        ]);
    
        FavoriteHero::create($validatedData);
    
        return redirect('/favoriteheroes')->with('success', "User's Favorite Hero added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(FavoriteHero $favoritehero): View
    {
        $users = User::all();
        $heroes = Hero::all();
        return view('admin.favoriteheroes.show',compact('favoritehero', 'users', 'heroes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FavoriteHero $favoritehero): View
    {
        $users = User::all();
        $heroes = Hero::all();
        return view('admin.favoriteheroes.edit',compact('favoritehero', 'users', 'heroes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FavoriteHero $favoritehero)
    {
        $validatedData = $request->validate([
            'users_id' => 'required',
            'heroes_id' => 'required',
            'date' => 'required',
            'notes' => 'required',
            'rating' => 'required|numeric',
        ]);
    
        $favoritehero->update($validatedData);
    
        return redirect('/favoriteheroes')->with('success', "User's Favorite Hero updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavoriteHero $favoritehero)
    {
        $favoritehero->delete();
    
        return redirect('/favoriteheroes')->with('success', "User's Favorite Hero deleted successfully!");
    }
}
