@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Regions</h1>
    <a class="btn btn-danger" href="{{ route('admin.regions.create') }}">Add a new Region</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Map</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($regions as $region)
                <tr>
                    <td scope="row">{{$region->id}}</td>
                    <td scope="row">{{$region->name}}</td>
                    <!-- <td scope="row">{{$region->map}}</td> -->
                    <td scope="row" class="text-center align-middle">
                                <a role="button" class="btn btn-primary"
                                    href="{{ route('admin.regions.show', $region->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a role="button" class="btn btn-secondary"
                                    href="{{ route('admin.regions.edit', $region->id) }}">
                                    <i class="text-light fa-solid fa-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $region->id }}">
                                    <i class="fa-regular fa-trash-can text-light"></i>
                                </button>
                                <div class="modal fade" id="modal-{{ $region->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $region->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex flex-column">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="close"></button>
                                                <h5 class="text-muted fs-6 text-uppercase">You are going to delete</h5>
                                                <h5 class="modal-title mb-2 text-uppercase fw-bold"
                                                    id="modalTitle-{{ $region->id }}">{{ $region->name }}</h5>
                                                <h5 class="modal-title mb-2 fs-6 text-muted"
                                                    id="modalTitle-{{ $region->id }}">No. {{ $region->id }}</h5>
                                                <img width="150" src="{{ $region->gif }}" alt="">
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0 text-danger text-uppercase">Once confirmed, there</p>
                                                <p class="mb-0 text-danger text-uppercase">will be no going back</p>
                                            </div>
                                            <div
                                                class="modal-footer d-flex justify-content-center align-items-center gap-2">
                                                <form action="{{ route('admin.regions.destroy', $region->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                                                        aria-label="close">Return</button>
                                                        <button type="submit" class="btn btn-danger">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                </tr>
                @empty
                <tr>
                    <td>
                        <p>No Regions yet</p>
                    </td>
                @endforelse
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
@endsection