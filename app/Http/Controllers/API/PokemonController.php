<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pokedex;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokedex::with([
            'region',
        ])->orderBy('id')->paginate(15);

        return response()->json([
            'success' => true,
            'pokemons' => $pokemons,
        ]);
    }

    public function show($name)
    {
        $pokemon = Pokedex::with([
            'region',
        ])->where('name', $name)->first();

        if ($pokemon) {
            return response()->json([
                'success' => true,
                'pokemon' => $pokemon,
            ]);
        } else {
            return response()->json([
                'success' => false,
            ]);
        }
    }

}
