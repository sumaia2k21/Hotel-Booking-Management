@extends('backend.master')
@section('content')

<!-- <div class="header-left" style="float: right;">
<form action="{{route('payment.search')}}" method="get">
    <div class="input-group icons">
            <div class="input-group-prepend">
                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                        class="mdi mdi-magnify"></i></span>
            </div>
            <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">

            <div class="drop-down animated flipInX d-md-none">
                
              
                    <button type="submit"><i
                            class="mdi mdi-magnify" type="submit" ></i></button>
                
            </div>
        </div>
    </form>
</div> -->

<div>
    <h2><strong>Booking/</strong>confirmation</h2>
</div>


<hr>
<br>
@if(session()->has('message'))
<span class="alert alert-success">
    {{ session()->get('message') }}
</span>
@endif

<div class="card">
    <table class="table table-bordered">
        <thead>
            <th scope="col">S.No</th>
            <th scope="col">Room name</th>
            <th scope="col">Room number</th>
            <th scope="col">price</th>
            <th scope="col">Status </th>
            <th scope="col">Payment Status </th>
            <th >subtotal </th>
           
             
        </thead>
        <tbody>
        @foreach($book as $request)
            <tr>
               <td>{{$request->id }}</td>
                <td>{{$request->room->room_name }}</td>
                <td>{{$request->room->room_number }}</td>
                <td>{{$request->room->price}}</td>
                <td>{{$request->book->status}}</td>
                <td>{{$request->book->payment_status}}</td>
                
                <td >{{$request->subtotal}}</td>
                <!-- <td>
                <a href="{{route('booking.delete',$request->id)}}" class="btn btn-danger">delete</a>
                </td> -->
          
            </tr>
            @endforeach       
        </tbody>
    </table>
    
</div>

@endsection
