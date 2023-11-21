@extends('layouts.main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Distance Of The Sun</th>
      <th scope="col">Discovered At</th>
    </tr>
  </thead>
  <tbody>
    @foreach($planets as $planet)
    <tr>
      <td>{{$planet["name"]}}</td>
      <td>{{$planet["distance_from_sun"]}}</td>
      <td>{{$planet["at"]}}</td>
      <td>
      <a href="/planets/detail/{{ $planet->id }}" type="button" class="btn btn-outline-info">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection