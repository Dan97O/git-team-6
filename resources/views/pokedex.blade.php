@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($pokemons as $pokemon)
                    <div class="col-12 col-md-6 col-lg-4 my-5">
                        <div class="card my_card">
                            <div class="card-img-top">
                                <img src="{{ $pokemon->gif }}" alt="{{ $pokemon->name }}">
                            </div>
                            <div class="card-body">
                                <span class="type-label {{ strtolower($pokemon->type_1) }}">
                                    {{ $pokemon->type_1 }}
                                </span>
                                @if ($pokemon->type_2)
                                    <span class="type-label {{ strtolower($pokemon->type_2) }}">
                                        {{ $pokemon->type_2 }}
                                    </span>
                                @endif
                                <div class="card-text mt-3">
                                    <p>HP: {{ $pokemon->hp }}</p>
                                    <p>Attack: {{ $pokemon->attack }}</p>
                                    <p>Defense: {{ $pokemon->defense }}</p>
                                    <p>Speed: {{ $pokemon->speed }}</p>
                                    <p>Special: {{ $pokemon->special }}</p>
                                    <p>Description: {{ $pokemon->description }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center align-items-center h-100">
                                    <h1>{{ $pokemon->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
