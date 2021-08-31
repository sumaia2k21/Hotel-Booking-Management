@extends('backend.master')
@section('content')
<h3 style="background: #f5c842;">Manage Room</h3>
<div class="card">
    <table class="table table-border">
        <thead>

            <th scope="col">sl</th>
            <th scope="col">catagory_id</th>
            <th scope="col">room_name</th>
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
            <td>{{$loop->iteration}}</td>        
               
                <td>{{$newroom->catagory->catagory_title}}</td>
                <td>{{$newroom->room_name}}</td>
                <td>{{$newroom->max_adult}}</td>
                <td>{{$newroom->max_child}}</td>
                <td>{{$newroom->no_of_bed}}</td>
                <td>{{$newroom->room_description}}</td>
                <td>{{$newroom->imaje}}</td>
                <td>{{$newroom->Price}}</td>
                
                
                
                <td>
                    <a type="button" class="btn btn-warning">view</a>
                    <a type="button" class="btn btn-success">edit</a>
                    <a type="button" class="btn btn-danger">delect</a>

                </td>

                <!-- <a type="button" class="btn btn-primary">Primary</a> -->

            </tr>
            @endforeach()
        </tbody>
    </table>
    {{$newroomlist->links('pagination::bootstrap-4')}} 
</div>

@endsection
