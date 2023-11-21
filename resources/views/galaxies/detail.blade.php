@extends('layouts.main')

@section('container')
    <ul>
        <li>Name: {{ $galaxy->name }}</li>
        <li>Number Of Star: {{ $galaxy->number_stars }}</li>
    </ul>

    <a href="/planets/all">Kembali</a>
@endsection