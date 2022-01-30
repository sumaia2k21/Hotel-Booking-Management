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
            <th scope="col">Image</th>
           
            
           
            
        </thead>
        <tbody>
            @foreach($gallerytable as $data)
            <tr>
                <td>{{$data->id}}</td>  
                <td>
                @foreach(collect($data->image) ?? [] as $image)
                <img src="{{url('/uploads/'.$image)}}"width="40px" alt="imag1e">
                @endforeach
                </td>
                <td> <a onclick="return confirm('Are you sure you want to delete this item?');"
                     href="{{route('gallery.delete',$data->id)}}" class="btn btn-danger">delete</a></td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
