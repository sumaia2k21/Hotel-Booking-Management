@extends('backend.master')
@section('content')
<!-- <h4 style="background: #f5c842;">Manage Facility</h4> -->

<h2>Gallery/<small>list</small></h2>
<hr>
<br>

<div class="card">
<table class="table table-striped table-hover">
    <thead >
         <th scope="col">sl</th>
            <th scope="col">name</th>
            <th scope="col">path</th>
            <th scope="col">image</th>
            
            
           
            
        </thead>
        <tbody>
            @foreach($images as $data)
            <tr>
                <td>{{$data->id}}</td>  
                <td>{{$data->name}}</td>
                <td>{{$data->path}}</td>  
                <td>
                <img src="{{url('/uploads/'.$data->images)}}"width="40px" alt="images">
                </td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
