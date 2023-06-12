@extends('layouts.app')

@section('content')
<div class="container">
        <h1>New Region</h1>
        @include('partials.validation_errors')
        <form action="{{ route('admin.regions.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpname"
                    value="{{ old('name') }}" placeholder="Add a new Region Name">
                <small id="helpname" class="form-text text-muted">Add a name which contains max 100 characters</small>
            </div>
        </form>
    </div>
@endsection