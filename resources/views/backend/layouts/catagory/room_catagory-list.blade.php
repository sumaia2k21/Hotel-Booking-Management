@extends('backend.master')
@section('content')

<h5>Catagory Under Room</h5>

<div class="card">
<table class="table table-bordered">
  <thead class="thead-dark">

            <th scope="col">ID</th>
            <th scope="col">Catagory Title</th>
            <th scope="col">Description</th>
            
           
            
        </thead>
        <tbody>
            
            @foreach($rooms as $data)
            <tr>  
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{$data->id}}</td>
                <td>{{$data->Catagory->catagory_title}}</td>
                <td>{{$data->room_number}}</td>

            </tr>
            @endforeach()
        </tbody>
    </table>
</div>

@endsection
