@extends('layouts.main')

@section('container')
    <ul>
        <li>Name: {{ $star->name }}</li>
        <li>Many Star: {{ $star->number_stars }}</li>
        <li>Discovered At: {{ $star->at }}</li>
    </ul>

    <a href="/stars/all">Kembali</a>
@endsection