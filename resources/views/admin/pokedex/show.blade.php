@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto py-5">
                <div class="card">
                    <div class="card-header text-center text-uppercase bg-danger text-light">
                        <h2 class="mb-0">{{ $pokedex->name }} #{{ $pokedex->id }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <img class="ps-4" src="{{ $pokedex->gif }}" alt="{{ $pokedex->name }}" width=100>
                            <div class="d-flex flex-column justify-content-between align-items-center gap-3">
                                <span class="type-label {{ strtolower($pokedex->type_1) }} badge">
                                    {{ $pokedex->type_1 }}
                                </span>
                                @if ($pokedex->type_2)
                                    <span class="type-label {{ strtolower($pokedex->type_2) }} badge">
                                        {{ $pokedex->type_2 }}
                                    </span>
                                @endif
                            </div>
                            <ul class="list-unstyled">
                                <li><strong>HP:</strong> {{ $pokedex->hp }}</li>
                                <li><strong>Attack:</strong> {{ $pokedex->attack }}</li>
                                <li><strong>Defence:</strong> {{ $pokedex->defense }}</li>
                                <li><strong>Speed:</strong> {{ $pokedex->speed }}</li>
                                <li><strong>Special:</strong> {{ $pokedex->special }}</li>
                                <li><strong>Special:</strong> {{ $pokedex->region?->name }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="fw-bold text-center">{{ $pokedex->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
