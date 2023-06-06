@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Modify Pokémon</h1>
    @include('partials.validation_errors')
    <form action="{{route('admin.pokedex.update', $pokemon->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text"
            class="form-control" name="name" id="name" aria-describedby="helpname" value="{{old('name', $pokemon->name)}}" placeholder="Modify a new Pokemon Name">
          <small id="helpname" class="form-text text-muted">Modify a name which contains max 100 characters</small>
        </div>
        <div class="mb-3">
          <label for="type_1" class="form-label">Type 1</label>
          <input type="text"
            class="form-control" name="type_1" id="type_1" aria-describedby="helptype_1" value="{{old('type_1', $pokemon->type_1)}}" placeholder="Modify a new Pokemon type_1">
          <small id="helptype_1" class="form-text text-muted">Modify a type_1</small>
        </div>
        <div class="mb-3">
          <label for="type_2" class="form-label">Type 2</label>
          <input type="text"
            class="form-control" name="type_2" id="type_2" aria-describedby="helptype_2" value="{{old('type_2', $pokemon->type_2)}}" placeholder="Modify a new Pokemon type_2">
          <small id="helptype_2" class="form-text text-muted">Modify a type_2</small>
        </div>
        <div class="mb-3">
          <label for="hp" class="form-label">HP</label>
          <input type="text"
            class="form-control" name="hp" id="hp" aria-describedby="helphp" value="{{old('hp', $pokemon->hp)}}" placeholder="Modify a new Pokemon hp">
          <small id="helphp" class="form-text text-muted">Modify HP value</small>
        </div>
        <div class="mb-3">
          <label for="attack" class="form-label">Attack</label>
          <input type="text"
            class="form-control" name="attack" id="attack" aria-describedby="helpattack" value="{{old('attack', $pokemon->attack)}}" placeholder="Modify a new Pokemon attack">
          <small id="helpattack" class="form-text text-muted">Modify a attack value</small>
        </div>
        <div class="mb-3">
          <label for="defense" class="form-label">Defense</label>
          <input type="text"
            class="form-control" name="defense" id="defense" aria-describedby="helpdefense" value="{{old('defense', $pokemon->defense)}}" placeholder="Modify a new Pokemon defense">
          <small id="helpdefense" class="form-text text-muted">Modify a defense value</small>
        </div>
        <div class="mb-3">
          <label for="speed" class="form-label">Speed</label>
          <input type="text"
            class="form-control" name="speed" id="speed" aria-describedby="helpspeed" value="{{old('speed', $pokemon->speed)}}" placeholder="Modify a new Pokemon speed">
          <small id="helpspeed" class="form-text text-muted">Modify a speed value</small>
        </div>
        <div class="mb-3">
          <label for="special" class="form-label">Special</label>
          <input type="text"
            class="form-control" name="special" id="special" aria-describedby="helpspecial" value="{{old('special', $pokemon->special)}}" placeholder="Modify a new Pokemon special">
          <small id="helpspecial" class="form-text text-muted">Modify a special</small>
        </div>
        <div class="mb-3">
          <label for="gif" class="form-label">Image</label>
          <input type="text"
            class="form-control" name="gif" id="gif" aria-describedby="helpgif" value="{{old('gif', $pokemon->gif)}}" placeholder="Modify a new Pokemon gif">
          <small id="helpgif" class="form-text text-muted">Modify a image path</small>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" value="{{old('description', $pokemon->description)}}" id="description" class="form-control w-100" rows="5"></textarea>
          <small id="helpname" class="form-text text-muted">Modify a description</small>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3 my-3">
            <button class=" btn reset btn-secondary rounded-3 border-0">Reset</button>
            <button class=" btn submit btn-success rounded-3 border-0">Confirm</button>
        </div>
    </form>
</div>
@endsection