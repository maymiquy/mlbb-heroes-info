<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteHero extends Model
{
    use HasFactory;
    
    protected $fillable = ['users_id', 'heroes_id', 'date', 'notes', 'rating'];

    public function getAllFavoriteHeroes()
    {
        return $this->favorite_heroes;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    
    public function hero()
    {
        return $this->belongsTo(Hero::class, 'heroes_id');
    }
}
