@extends('layouts.admin')

@section('content')
<div class="container">
        <h1>Editer Region</h1>
        @include('partials.validation_errors')
        <form action="{{ route('admin.regions.update', $region->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpname"
                    value="{{ old('name', $region->name) }}" placeholder="Modify a new Pokemon Name">
                <small id="helpname" class="form-text text-muted">Modify the name which contains max 100 characters</small>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3 my-3">
                <button class=" btn reset btn-secondary rounded-3 border-0">Reset</button>
                <button class=" btn submit btn-success rounded-3 border-0">Confirm</button>
            </div>
        </form>
    </div>
@endsection