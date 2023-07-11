<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Hero;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\DifficultyController;
use App\Http\Controllers\FavoriteHeroController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $heroes = Hero::all();
    
    return view('index',compact('heroes'));
});
 

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin.home');

    //HEROES!!
    Route::resource('/heroes', HeroController::class);
    
    //ROLES!!
    Route::resource('/roles', RoleController::class);
    
    //SPECIALTY!!
    Route::resource('/specialties', SpecialtyController::class);
    
    //DIFFICULTY!!
    Route::resource('/difficulties', DifficultyController::class);
    
    //FAVORITE HEROES!!
    Route::resource('/favoriteheroes', FavoriteHeroController::class);

    //USERS!!
    Route::resource('/users', UserController::class);
});

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('detail/{hero}', [HomeController::class, 'detail'])->name('detail');
Route::get('heroes.detail/{hero}', [HeroController::class, 'detail'])->name('heroes.detail');

