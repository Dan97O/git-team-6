@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($pokemons as $pokemon)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Name: {{ $pokemon->name }}</h2>
                            </div>
                            <div class="card-body">
                                <h3>Type 1: {{ $pokemon->type_1 }}</h3>
                                <h3>Type 2: {{ $pokemon->type_2 }}</h3>
                                <h3>Total: {{ $pokemon->total }}</h3>
                                <h3>HP: {{ $pokemon->hp }}</h3>
                                <h3>Attack: {{ $pokemon->attack }}</h3>
                                <h3>Defense: {{ $pokemon->defense }}</h3>
                                <h3>Special Attack: {{ $pokemon->sp_atk }}</h3>
                                <h3>Special Defense: {{ $pokemon->sp_def }}</h3>
                                <h3>Speed: {{ $pokemon->speed }}</h3>
                                <h3>Generation: {{ $pokemon->generation }}</h3>
                                <h3>Legendary: {{ $pokemon->legendary ? 'Yes' : 'No' }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
