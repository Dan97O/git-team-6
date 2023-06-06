<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokedexRequest;
use App\Http\Requests\UpdatePokedexRequest;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pokemons = Pokedex::all();
        //dd($pokemons);
        return view('admin.pokedex.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pokemons = Pokedex::all();
        return view('admin.pokedex.create', compact('pokemons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePokedexRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePokedexRequest $request)
    {
        $val_data = $request ->validated();

        Pokedex::create($val_data);
        return to_route('admin.pokedex.index')->with('message', 'A new Pokemon has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function show(Pokedex $pokedex)
    {   
        $pokemons = Pokedex::all();
        return view('admin.pokedex.show', compact('pokedex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokedex $pokedex)
    {   
        $pokemons = Pokedex::all();
        return view('admin.pokedex.edit', compact('pokedex'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePokedexRequest  $request
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePokedexRequest $request, Pokedex $pokedex)
    {
        $val_data = $request ->validated();

        $pokedex->update($val_data);
        return to_route('admin.pokedex.index')->with('message', 'The Pokemon has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokedex $pokedex)
    {
        $pokedex->delete();
        return to_route('admin.pokedex.index')->with('message', 'The Pokemon has been deleted successfully');
    }
}
