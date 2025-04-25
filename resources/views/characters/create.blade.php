@extends('characters')

@section('content')
    <h5 class="mb-4">Character Dictionary</h5>



    <form action="{{ route('characters.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="power" class="form-label fw-semibold">Power</label>
            <input type="text" class="form-control" id="power" placeholder="Power" value="{{ old('power') }}">
        </div>

        <div class="mb-3">
            <label for="universe" class="form-label fw-semibold">Universe</label>
            <input type="text" class="form-control" id="universe" placeholder="Universe" value="{{ old('universe') }}">
        </div>
        
        <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-outline-dark btn-sm ms-3" style="width: 150px">
                        <i class="bi bi-plus-circle"></i> &nbsp;Add character
</button>
            <a href="{{ route('characters.index') }}" type="button" class="btn btn-outline-danger">Cancel</a>
        </div>
    </form>
@endsection