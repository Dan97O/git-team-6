@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            @foreach($pokemons as $pokemon)
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div>{{$pokemon->name}}</div>
                    </div>
                    <div class="card-body">
                        <div>{{$pokemon->primary_type}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection