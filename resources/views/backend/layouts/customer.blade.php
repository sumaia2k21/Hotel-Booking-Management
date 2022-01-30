@extends('backend.master')
@section('content')
<h2>Customer list</h2>
<div class="row">
@if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
	</span>
@endif
</div> 
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
    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      
      <td>{{$data->email}}</td>
      <td>{{$data->role}}</td>
      <td>
     
      <a href="{{route('user.delete',$data->id)}}" class="btn btn-danger">delet</a>
      </td>
    </tr>
    
  </tbody>
  @endforeach
</table>

@endsection