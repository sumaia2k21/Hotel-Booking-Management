<!-- @extends('backend.master')
@section('content')
<h2>user under staff list</h2>

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
@foreach($user_staff as $data)
  <tbody>
    <tr>
    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      
      <td>{{$data->email}}</td>
      <td>{{$data->role}}</td>
      
    </tr>
    
  </tbody>
  @endforeach
</table>

@endsection -->