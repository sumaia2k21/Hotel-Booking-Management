@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel Booking Management System/</strong>Catagory</h1>	
</div> -->
<!-- <h2>Catagory/<small>add catagory</small></h2> -->

<h1 style="background: #f5c842;">Manage Catagory</h1>

<div class="card">
<table class="table table-bordered">
  <thead class="thead-light">

            <th scope="col">sl</th>
            <th scope="col">Catagory Title</th>
            <th scope="col">Description</th>

            <th scope="col">price</th>
            <th scope="col">Action</th>
            
        </thead>
        <tbody>
            @foreach($catagorylist as $catagory)
            <tr>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{$catagory->id}}</td>
                <td>{{$catagory->catagory_title}}</td>
                <td>{{$catagory->description}}</td>
                <td>{{$catagory->price}}</td>
                
                <td>
                 
                <a href="{{route('catagory.room',$catagory->id)}}" class="btn btn-success">view</a>
                    <a type="button" class="btn btn-danger">delect</a>

                </td>

                <!-- <a type="button" class="btn btn-primary">Primary</a> -->

            </tr>
            @endforeach()
        </tbody>
    </table>
   {{$catagorylist->links('pagination::bootstrap-4')}} 
</div>

@endsection
