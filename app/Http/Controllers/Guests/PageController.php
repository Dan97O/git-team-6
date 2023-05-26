<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function pokedex()
    {
        $pokemons = Pokemon::all();
        return view('pokedex', compact('pokemons'));
    }
}
