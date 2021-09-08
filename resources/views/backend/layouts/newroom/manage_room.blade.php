@extends('backend.master')
@section('content')
<h3 style="background: #f5c842;">Manage Room</h3>

@if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
	</span>
@endif  

<div class="card">
    <table class="table table-border">
        <thead>

            <th scope="col">sl</th>
            <th scope="col">catagory_id</th>
            <th scope="col">room_name</th>
            <th scope="col">room_number</th>
            <th scope="col">Dmax_adult</th>
            <th scope="col">max_child</th>
            <th scope="col">no_of_bed</th>
            <th scope="col">room_description</th>
            <th scope="col">Imaje</th>
            <th scope="col">price</th>
            
           
            <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($newroomlist as $newroom)
            <tr>  
            <td>{{$newroom->id}}</td>        
               
                <td>{{$newroom->catagory->catagory_title}}</td>
                <td>{{$newroom->room_name}}</td>
                <td>{{$newroom->room_number}}</td>
                <td>{{$newroom->max_adult}}</td>
                <td>{{$newroom->max_child}}</td>
                <td>{{$newroom->no_of_bed}}</td>
                <td>{{$newroom->room_description}}</td>
                <td>
                    <img src="{{url('/uploads/'.$newroom->imaje)}}"width="40px" alt="imaje">

                </td>
                <td>{{$newroom->Price}}</td>
                
                
                
                <td>
                    <a type="button" class="btn btn-warning">view</a>
                    <a href="{{route('room.edit',$newroom->id)}}" class="btn btn-success">edit</a>
                    <a  onclick="return confirm('Are you sure you want to delete this item?');"href="{{route('room.delete',$newroom->id)}}" class="btn btn-danger">deleted</a>

                </td>

                <!-- <a type="button" class="btn btn-primary">Primary</a> -->

            </tr>
            @endforeach()
        </tbody>
    </table>
    {{$newroomlist->links('pagination::bootstrap-4')}} 
</div>

@endsection
