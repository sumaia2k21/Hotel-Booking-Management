@extends('backend.master')
@section('content')

<h2>Coupon/<small>list</small></h2>
<hr>
<br>

<div class="card">
<table class="table table-striped table-hover">
    <thead >
         <th scope="col">sl</th>
            <th scope="col">Coupon Code</th>
            <th scope="col">Coupon type</th>
            <th scope="col">Coupon value</th>
            
           
            
        </thead>
        <tbody>
            @foreach($coupon as $data)
            <tr>
                <td>{{$data->id}}</td>  
                <td>{{$data->code}}</td>
                <td>{{$data->type}}</td>
                <td>{{$data->value}}</td>  

               
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
