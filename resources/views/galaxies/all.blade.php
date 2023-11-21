@extends('layouts.main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Number Of Star</th>
    </tr>
  </thead>
  <tbody>
    @foreach($galaxies as $galaxy)
    <tr>
      <td>{{$galaxy["name"]}}</td>
      <td>{{$galaxy["number_stars"]}}</td>
      <td>
      <a href="/galaxies/detail/{{ $galaxy->id }}" type="button" class="btn btn-outline-info">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

