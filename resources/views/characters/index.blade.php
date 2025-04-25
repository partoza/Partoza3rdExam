@extends('characters')

@section('content')
        <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="row w-100">
                        <h4 class="fw-bold mb-3">Characters</h4>
                        <a href={{ route('characters.create') }} class="btn btn-outline-dark btn-sm ms-3" style="width: 150px">
                        <i class="bi bi-plus-circle"></i> &nbsp;Add character
                        </a>
                        <hr class="my-4 w-100">
                        
                        @forelse ($characters as $character)
                        <div class="card mb-3 shadow-sm rounded">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                        <h5 class="mb-1 fw-bold">Bombardiro Gousini</h5>
                                        <p class="mb-0 text-muted small">Bombs away</p>
                                        <p class="mb-0 text-muted small">Italian mobs</p>
                                        </div>
                                        <div class="dropdown">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                        </div>
                                </div>
                        </div>
                        @empty
                        <div class="alert text-center" role="alert">
                                No characters found.
                        @endforelse
                </div>
        </div>
@endsection