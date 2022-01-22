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
             <th scope="col">Sl</th>
            <th scope="col">Category Title</th>
            
            <th scope="col">Description</th>
            <th scope="col">Discount</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
       
            <tr>
                <td>{{$catagorylist->id}}</td>
                <td>{{$catagorylist->catagory_title}}</td>
                <td>{{$catagorylist->description}}</td>
                <td>{{$catagorylist->discount}}%</td>
                <td>{{$catagorylist->status}}</td>
                <td>
                <a onclick="return confirm('Are you sure you want to delete this item?');"
                        href="{{route('discount.active',$catagorylist->id)}}" class="btn btn-danger">Active</a>
                       <a href="{{route('discount.cancel',$catagorylist->id)}}" class="btn btn-success">Deactive</a>
                       <a href="{{route('catagory.edit',$catagorylist->id)}}" class="btn btn-success">edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');"
                        href="{{route('catagory.delete',$catagorylist->id)}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
          
        </tbody>
    </table>

</div>

@endsection
