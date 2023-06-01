@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            @foreach($pokemons as $pokemon)
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Name: {{$pokemon->name}}</h2>
                    </div>
                    <div class="card-body">
                        <h2>Type: {{$pokemon->type_1}}</h2>
                        <h2>Type: {{$pokemon->type_2}}</h2>
                        <h2>Type: {{$pokemon->total}}</h2>
                        <h2>Type: {{$pokemon->hp}}</h2>
                        <h2>Type: {{$pokemon->attack}}</h2>
                        <h2>Type: {{$pokemon->defense}}</h2>
                        <h2>Type: {{$pokemon->sp_atk}}</h2>
                        <h2>Type: {{$pokemon->sp_def}}</h2>
                        <h2>Type: {{$pokemon->speed}}</h2>
                        <h2>Type: {{$pokemon->generation}}</h2>
                        <h2>Type: {{$pokemon->legendary}}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection