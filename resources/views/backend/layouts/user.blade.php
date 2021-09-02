@extends('backend.master')
@section('content')
<h2>User list</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
@foreach($user as $data)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$data->name}}</td>
      
      <td>{{$data->email}}</td>
      <td>{{$data->role}}</td>
      <td>view</td>
    </tr>
    
  </tbody>
  @endforeach
</table>

@endsection