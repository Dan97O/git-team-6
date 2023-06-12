@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-8 mx-auto py-5">
                <div class="card">
                    <div class="card-header text-center text-uppercase bg-danger text-light">
                        <h2 class="mb-0">{{ $region->name }} #.{{ $region->id }}</h2>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection