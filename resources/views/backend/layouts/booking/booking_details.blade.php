@extends('backend.master')
@section('content')



<div>
    <h2><strong>Booking/</strong>confirmation</h2>
</div>


<!-- <hr>
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
            <th scope="col">discount</th>
            <th scope="col">Total Paid</th>
            <th scope="col">discount_price</th>
            
            <th scope="col">from_date</th>
            <th scope="col">to_date</th>
            <th scope="col">subtotal </th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
             
        </thead>
        <tbody>
        @foreach($book as $request)
            <tr>
                <td>{{$request->id}}</td>
                
                <td>{{$request->room->room_name }}</td>
                <td>{{$request->room->room_number }}</td>
                <td>{{$request->room->price}}</td>
                <td>{{$request->room->discount}}</td>
                <td>{{$request->room->discount_price}}</td>
                <td>{{$request->book->from_date}}</td>
                <td>{{$request->book->to_date}}</td>
                <td>{{$request->subtotal}}</td>
                <td>{{$request->book->total_paid}}</td>
                <td>{{$request->book->status}}</td>
                <td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div> -->

@endsection
