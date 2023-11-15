@extends('layout.main')

@section('content')
    <h1>Detail Planet</h1>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $planet->name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="distance_from_sun" class="form-label">Distance From The Sun</label>
            <input type="text" class="form-control" id="distance_from_sun" name="distance_from_sun" value="{{ $planet->distance_from_sun }}" disabled>
        </div>
        <div class="mb-3">
            <label for="at" class="form-label">Discovered At</label>
            <input type="text" class="form-control" id="at" name="at" value="{{ $planet->at }}" disabled>
        </div>
    </form>
@endsection
