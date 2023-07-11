<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Role;
use App\Models\Specialty;
use App\Models\Difficulty;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $heroes = Hero::all();
        
        return view('admin.heroes.index',compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::all();
        $difficulties = Difficulty::all();
        $specialties = Specialty::all();
        return view('admin.heroes.create', compact(('roles'),('difficulties'),('specialties')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'weapon' => 'required',
            'role_id' => 'required',
            'specialty_id' => 'required',
            'difficulty_id' => 'required',
            'description' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('poster')) {
            $destinationPath = 'assets/img/';
            if (file_exists($destinationPath . $input['poster'])) {
                unlink($destinationPath . $input['poster']);
            }
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['poster'] = "$profileImage";
        }
      
        Hero::create($input);
       
        return redirect()->route('heroes.index')
                        ->with('success','Hero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero): View
    {
        $roles = Role::all();
        $specialties = Specialty::all();
        $difficulties = Difficulty::all();
        return view('admin.heroes.show',compact('hero', 'roles', 'specialties', 'difficulties'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero): View
    {
        $roles = Role::all();
        $specialties = Specialty::all();
        $difficulties = Difficulty::all();
        return view('admin.heroes.edit', compact('hero', 'roles', 'specialties', 'difficulties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'weapon' => 'required',
            'role_id' => 'required',
            'specialty_id' => 'required',
            'difficulty_id' => 'required',
            'description' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('poster')) {
            $destinationPath = 'assets/img/';
            if (file_exists($destinationPath . $input['poster'])) {
                unlink($destinationPath . $input['poster']);
            }
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['poster'] = "$profileImage";
        }
            
        $hero->update($input);
      
        return redirect()->route('heroes.index')
                        ->with('success','The hero has been updated successfully.');
    }
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
    
        return redirect('/heroes')->with('success', 'Hero has been deleted successfully!');
    }

    public function detail(Hero $hero): View
    {
        $roles = Role::all();
        $specialties = Specialty::all();
        $difficulties = Difficulty::all();
        return view('detail',compact('hero', 'roles', 'specialties', 'difficulties'));
    }

}
