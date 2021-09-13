<!-- @extends('backend.master')
@section('content')
<h2>Add staff</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User name</th>
      <th scope="col">role</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
@foreach($staff as $data)
  <tbody>
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
      <td>{{$data->role}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
      <td>{{$data->mobile}}</td>
      <td>action</td>
    </tr>
    
  </tbody>
  @endforeach
</table>

@endsection -->