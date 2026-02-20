<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $table = 'universes';
    protected $fillable = ['universe', 'company', 'age'];

    // Obtener los personajes de este universo

    public function characters()
    {
        return $this->hasMany(Character::class, 'id_universe');
    }
}
