<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Hero;
use App\Models\Specialty;
use App\Models\Difficulty;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $heroes = Hero::all();

        return view('index', compact('heroes'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $heroes = Hero::all();

        return view('admin/home', compact('heroes'));
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $heroes = Hero::where('name', 'like', "%" . $keyword . "%")->get();
        return view('index', compact('heroes'));
    }
    
    public function detail(Hero $hero)
    {
        $roles = Role::all();
        $specialties = Specialty::all();
        $difficulties = Difficulty::all();
        return view('detail',compact('hero', 'roles', 'specialties', 'difficulties'));
    }
}
