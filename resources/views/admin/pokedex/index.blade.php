@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-danger" href="#">Add new pokemon</a>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Sprite</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type 1</th>
                        <th scope="col">Type 2</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pokemons as $pokemon)
                        <tr class="">
                            <td scope="row"> {{ $pokemon->id }} </td>
                            <td scope="row"> {{ $pokemon->name }} </td>
                            <td scope="row"> <img height="100" src="{{ $pokemon->gif }}" alt="{{ $pokemon->name }}">
                            </td>
                            <td scope="row"> {{ $pokemon->description }} </td>
                            <td scope="row"> {{ $pokemon->type_1 }} </td>
                            <td scope="row"> {{ $pokemon->type_2 }} </td>
                            <td scope="row">
                                view/edit/delete
                            </td>
                        </tr>

                    @empty
                        <tr class="">
                            <td scope="row">No data found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
