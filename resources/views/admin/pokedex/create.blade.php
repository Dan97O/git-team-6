@extends('layouts.app')

@section('content')

<div class="container">
    <h1>New Pokémon</h1>
    @include('partials.validation_errors')
    <form action="{{route('admin.pokedex.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text"
            class="form-control" name="name" id="name" aria-describedby="helpname" placeholder="Add a new Pokemon Name">
          <small id="helpname" class="form-text text-muted">Add a name which contains max 100 characters</small>
        </div>
        <div class="mb-3">
          <label for="type_1" class="form-label">Type 1</label>
          <input type="text"
            class="form-control" name="type_1" id="type_1" aria-describedby="helptype_1" placeholder="Add a new Pokemon type_1">
          <small id="helptype_1" class="form-text text-muted">Add a type_1</small>
        </div>
        <div class="mb-3">
          <label for="type_2" class="form-label">Type 2</label>
          <input type="text"
            class="form-control" name="type_2" id="type_2" aria-describedby="helptype_2" placeholder="Add a new Pokemon type_2">
          <small id="helptype_2" class="form-text text-muted">Add a type_2</small>
        </div>
        <div class="mb-3">
          <label for="hp" class="form-label">HP</label>
          <input type="text"
            class="form-control" name="hp" id="hp" aria-describedby="helphp" placeholder="Add a new Pokemon hp">
          <small id="helphp" class="form-text text-muted">Add HP value</small>
        </div>
        <div class="mb-3">
          <label for="attack" class="form-label">Attack</label>
          <input type="text"
            class="form-control" name="attack" id="attack" aria-describedby="helpattack" placeholder="Add a new Pokemon attack">
          <small id="helpattack" class="form-text text-muted">Add a attack value</small>
        </div>
        <div class="mb-3">
          <label for="defense" class="form-label">Defense</label>
          <input type="text"
            class="form-control" name="defense" id="defense" aria-describedby="helpdefense" placeholder="Add a new Pokemon defense">
          <small id="helpdefense" class="form-text text-muted">Add a defense value</small>
        </div>
        <div class="mb-3">
          <label for="speed" class="form-label">Speed</label>
          <input type="text"
            class="form-control" name="speed" id="speed" aria-describedby="helpspeed" placeholder="Add a new Pokemon speed">
          <small id="helpspeed" class="form-text text-muted">Add a speed value</small>
        </div>
        <div class="mb-3">
          <label for="special" class="form-label">Special</label>
          <input type="text"
            class="form-control" name="special" id="special" aria-describedby="helpspecial" placeholder="Add a new Pokemon special">
          <small id="helpspecial" class="form-text text-muted">Add a special</small>
        </div>
        <div class="mb-3">
          <label for="gif" class="form-label">Image</label>
          <input type="text"
            class="form-control" name="gif" id="gif" aria-describedby="helpgif" placeholder="Add a new Pokemon gif">
          <small id="helpgif" class="form-text text-muted">Add a image path</small>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" class="form-control w-100" rows="5"></textarea>
          <small id="helpname" class="form-text text-muted">Add a description</small>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3 my-3">
            <button class=" btn reset btn-secondary rounded-3 border-0">Reset</button>
            <button class=" btn submit btn-success rounded-3 border-0">Confirm</button>
        </div>
    </form>
</div>
@endsection