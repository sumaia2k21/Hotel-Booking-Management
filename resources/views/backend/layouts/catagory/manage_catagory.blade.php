@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel Booking Management System/</strong>Catagory</h1>	
</div> -->
<h2>Catagory/<small>add catagory</small></h2>
<hr>
<br>

@if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
	</span>
@endif  

<div class="card">
<table class="table table-bordered">
  <thead class="thead-light">

            <th scope="col">sl</th>
            <th scope="col">Catagory Title</th>
            <!-- <th scope="col">max_adult</th>
            <th scope="col">max_child</th>
            <th scope="col">no_of_bed</th> -->
            <th scope="col">image</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">Action</th>
            
        </thead>
        <tbody>
            @foreach($catagorylist as $catagory)
            <tr>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{$catagory->id}}</td>
                <td>{{$catagory->catagory_title}}</td>
                <!-- <td>{{$catagory->max_adult}}</td>
                <td>{{$catagory->max_child}}</td>
                <td>{{$catagory->no_of_bed}}</td> -->
                <td>
                    <img src="{{url('/uploads/'.$catagory->image)}}"width="40px" alt="image">

                </td>
                <td>{{$catagory->description}}</td>
                <td>{{$catagory->price}}</td>
                
                <td>
                 
                <a href="{{route('catagory.room',$catagory->id)}}" class="btn btn-success">view</a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('catagory.delete',$catagory->id)}}" class="btn btn-danger">delete</a>

                </td>

                <!-- <a type="button" class="btn btn-primary">Primary</a> -->

            </tr>
            @endforeach()
        </tbody>
    </table>
   {{$catagorylist->links('pagination::bootstrap-4')}} 
</div>

@endsection
