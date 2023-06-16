<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'poster', 'weapon', 'role_id', 'specialty_id', 'difficulty_id', 'description'];

    public function getAllHeroes()
    {
        return $this->heroes;
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }

    public function difficulty()
    {
        return $this->belongsTo(Difficulty::class, 'difficulty_id');
    }

}
