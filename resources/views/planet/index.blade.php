@extends('layout.main')

@section('content')
    <h1>Planets</h1>
    <table class="table table-striped">
        <tr>
                <th>Name</th>
                <th>Distance Of The Sun</th>
                <th>Discovered At</th>
        </tr>
        @foreach($planets as $planet)
            <td>{{ $planet['name'] }}</td>
            <td>{{ $planet['distance_from_sun'] }}</td>
            <td>{{ $planet['at'] }}</td>
        @endforeach
    </table>
@endsection

