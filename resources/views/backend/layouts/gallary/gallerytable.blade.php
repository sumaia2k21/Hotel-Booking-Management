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
            <th scope="col">img_src</th>
            <th scope="col">img_alt</th>
            
           
            
        </thead>
        <tbody>
            @foreach($gallerytable as $data)
            <tr>
                <td>{{$data->id}}</td>  
                <td>
                <img src="{{url('/uploads/'.$data->image1)}}"width="40px" alt="imag1e">
                </td>
                <td>{{$data->img_src}}</td>
                <td>{{$data->img_alt}}</td>  

               
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
