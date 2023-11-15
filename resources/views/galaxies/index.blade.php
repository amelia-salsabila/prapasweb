@extends('layout.main')

@section('content')
    <h1>Galaxies</h1>
    <table class="table table-striped">
        <tr>
                <th>Name</th>
                <th>Number Of Stars</th>
        </tr>
        @foreach($galaxies as $galaxy)
            <tr>
                <td>{{ $galaxy['name'] }}</td>
                <td>{{ $galaxy['number_stars'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

