@extends('layouts.main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Many Star</th>
      <th scope="col">Discovered At</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($stars as $star)
    <tr>
      <td>{{$star["name"]}}</td>
      <td>{{$star["number_stars"]}}</td>
      <td>{{$star["at"]}}</td>
      <td>
    <a href="/stars/detail/{{ $star->id }}" type="button" class="btn btn-outline-info">Detail</a>
  </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection