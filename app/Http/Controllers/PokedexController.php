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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePokedexRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePokedexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function show(Pokedex $pokedex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokedex $pokedex)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokedex $pokedex)
    {
        //
    }
}
