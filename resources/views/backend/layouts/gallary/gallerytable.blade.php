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
            <th scope="col">Image1</th>
            <th scope="col">Image2</th>
            <th scope="col">Image3</th>
            <th scope="col">Image4</th>
            <th scope="col">image5</th>
            <th scope="col">image6</th>
            <th scope="col">image7</th>
            <th scope="col">image8</th>

           
            
        </thead>
        <tbody>
            @foreach($gallerytable as $fy)
            <tr>
                <td>{{$fy->id}}</td>  
                <td>
                <img src="{{url('/uploads/'.$fy->image1)}}"width="40px" alt="imaje">
                </td>  
                <td>
                <img src="{{url('/uploads/'.$fy->image2)}}"width="40px" alt="imaje">
                </td> 
                <td>
                <img src="{{url('/uploads/'.$fy->image3)}}"width="40px" alt="imaje">
                </td> 
                <td>
                <img src="{{url('/uploads/'.$fy->image4)}}"width="40px" alt="imaje">
                </td> 
                <td>
                <img src="{{url('/uploads/'.$fy->image5)}}"width="40px" alt="imaje">
                </td> 
                <td>
                <img src="{{url('/uploads/'.$fy->image6)}}"width="40px" alt="imaje">
                </td> 
                <td>
                <img src="{{url('/uploads/'.$fy->image7)}}"width="40px" alt="imaje">
                </td> 
                <td>
                <img src="{{url('/uploads/'.$fy->image8)}}"width="40px" alt="imaje">
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
