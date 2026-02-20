<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Universe;

class SuperheroController extends Controller
{
    public function index() {
        //Obtenemos todos los personajes con su universo (Eager Loading)
        $characters = Character::with('universe')->get();
        return view('superheroes.index', compact('characters'));
    }
}
