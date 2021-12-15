@extends('backend.master')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- <h3 style="background: #f5c842;">Manage Room</h3> -->
<h3><strong>Room</strong>list</h3>
<hr>

@if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
	</span>
@endif  


<div class="card">
    <table class="table table-border">
        <thead>

            <th scope="col">sl</th>
            <th scope="col">catagory title</th>
            <th scope="col">room_name</th>
            <th scope="col">room_number</th>
            <th scope="col">max_adult</th>
            <th scope="col">max_child</th>
            <th scope="col">no_of_bed</th>
            <th scope="col">room_description</th>
            <th scope="col">Amenities</th>
            <th scope="col">Image</th>
            <th scope="col">price</th>
            <th scope="col">discount</th>
            <th scope="col">status</th>
            <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($newroomlist as $newroom)
            <tr> 
 
            <td>{{$newroom->id}}</td>        
            <!-- <td>{{$loop->iteration}}</td>  -->
                <td>{{$newroom->catagory->catagory_title}}</td>
                <td>{{$newroom->room_name}}</td>
                <td>{{$newroom->room_number}}</td>
                <td>{{$newroom->max_adult}}</td>
                <td>{{$newroom->max_child}}</td>
                <td>{{$newroom->no_of_bed}}</td>
                <td>{{$newroom->room_description}} </td>
                <td>
                     @foreach($newroom->roomamenities as $data)
                    <span class="badge alert-success">{{$data->amenity->facility_title}}</span>
                    @endforeach
                </td>
                <td>
                    <img src="{{url('/uploads/'.$newroom->image)}}"width="40px" alt="image">
                </td>
                <td>{{$newroom->price}}</td>
                <td>{{$newroom->discount}}</td>
                <td>{{$newroom->status}}</td>
                <td>
                  
                    <a href="{{route('room.edit',$newroom->id)}}" class="btn btn-light"><i class="material-icons">edit</i></a>
                    <a  onclick="return confirm('Are you sure you want to delete this item?');"href="{{route('room.delete',$newroom->id)}}" class="btn btn-light"><i class="material-icons">delete</i></a>

                </td>
            </tr>
            @endforeach()
        </tbody>
    </table>
    {{$newroomlist->links('pagination::bootstrap-4')}} 
</div>

@endsection
