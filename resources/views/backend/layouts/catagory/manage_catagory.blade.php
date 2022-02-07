@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel Booking Management System/</strong>Catagory</h1>	
</div> -->
<h2>Catagory/<small>add catagory</small></h2>
<hr>
<br>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="card">
    <table class="table table-bordered">
        <thead class="thead-light">
             <th scope="col">Sl</th>
            <th scope="col">Category Title</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <!-- <th scope="col">Discount</th> -->
            
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach($catagorylist as $catagory)
            <tr>
               
                <td>{{$catagory->id}}</td>
                <td>{{$catagory->catagory_title}}</td>
                <td>
                    <img src="{{url('/uploads/'.$catagory->image)}}" width="40px" alt="image">
                </td>
                <td>{{$catagory->description}}</td>
                <!-- <td>{{$catagory->discount}}%</td> -->
                
                <td>
                <!-- <a href="{{route('discount.confirmation',$catagory->id)}}" class="btn btn-success">discount</a> -->
                <!-- <a href="{{route('catagory.edit',$catagory->id)}}" class="btn btn-primary">discount</a> -->
                       <a href="{{route('catagory.room',$catagory->id)}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');"
                        href="{{route('catagory.delete',$catagory->id)}}"  class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
            @endforeach()
        </tbody>
    </table>
    {{$catagorylist->links('pagination::bootstrap-4')}}
</div>

@endsection
