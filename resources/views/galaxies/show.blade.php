@extends('layout.main')

@section('content')
    <h1>Detail Galaxy</h1>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $galaxy->name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="number_stars" class="form-label">Number of Stars</label>
            <input type="text" class="form-control" id="number_stars" name="number_stars" value="{{ $galaxy->number_stars }}" disabled>
        </div>
    </form>
@endsection
