@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-danger" href="{{ route('admin.pokedex.create') }}">Add new pokemon</a>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Sprite</th>
                        <th scope="col">Obtained in</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type 1</th>
                        <th scope="col">Type 2</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pokemons as $pokemon)
                        <tr class="">
                            <td class="text-center align-middle" scope="row"> {{ $pokemon->id }} </td>
                            <td class="text-center align-middle" scope="row"> {{ $pokemon->name }} </td>

                            <td class="text-center align-middle" scope="row"> <img height="100"
                                    src="{{ $pokemon->gif }}" alt="{{ $pokemon->name }}">
                            </td>
                            <td class="text-center align-middle" scope="row" width="15%">
                                {{ $pokemon->region?->name }} </td>
                            <td scope="row" class="text-center align-middle"> {{ $pokemon->description }} </td>
                            <td scope="row" class="text-center align-middle"> {{ $pokemon->type_1 }} </td>
                            <td scope="row" class="text-center align-middle"> {{ $pokemon->type_2 }} </td>
                            <td scope="row" width="15%" class="text-center align-middle">
                                <a role="button" class="btn btn-primary"
                                    href="{{ route('admin.pokedex.show', $pokemon->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a role="button" class="btn btn-secondary"
                                    href="{{ route('admin.pokedex.edit', $pokemon->id) }}">
                                    <i class="text-light fa-solid fa-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $pokemon->id }}">
                                    <i class="fa-regular fa-trash-can text-light"></i>
                                </button>
                                <div class="modal fade" id="modal-{{ $pokemon->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $pokemon->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex flex-column">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="close"></button>
                                                <h5 class="text-muted fs-6 text-uppercase">You are going to delete</h5>
                                                <h5 class="modal-title mb-2 text-uppercase fw-bold"
                                                    id="modalTitle-{{ $pokemon->id }}">{{ $pokemon->name }}</h5>
                                                <h5 class="modal-title mb-2 fs-6 text-muted"
                                                    id="modalTitle-{{ $pokemon->id }}">No. {{ $pokemon->id }}</h5>
                                                <img width="150" src="{{ $pokemon->gif }}" alt="">
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0 text-danger text-uppercase">Once confirmed, there</p>
                                                <p class="mb-0 text-danger text-uppercase">will be no going back</p>
                                            </div>
                                            <div
                                                class="modal-footer d-flex justify-content-center align-items-center gap-2">
                                                <form action="{{ route('admin.pokedex.destroy', $pokemon->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                    aria-label="close">Return</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
