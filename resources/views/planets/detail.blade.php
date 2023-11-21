@extends('layouts.main')

@section('container')
    <ul>
        <li>Name: {{ $planet->name }}</li>
        <li>Distance Of The Sun: {{ $planet->distance_from_sun }}</li>
        <li>Discovered At: {{ $planet->at }}</li>
    </ul>

    <a href="/planets/all">Kembali</a>
@endsection