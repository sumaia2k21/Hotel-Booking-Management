@extends('backend.master')
@section('content')
<div>
    <h1><strong>Hotel Booking Management System/</strong>booking</h2>
</div>
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
            <th scope="col">Room number</th>
            <!-- <th scope="col">Booking Number</th> -->
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">Email</th>
            <th scope="col">address</th>
            <th scope="col">checkin</th>
            <th scope="col">checkout</th>
           <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($request as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->room->room_number}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->mobile_no}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->checkin}}</td>
                <td>{{$list->checkout}}</td>
                <td>Active</td>
                <td>
                    <a href="{{route('booking.delete',$list->id)}}" class="btn btn-warning">view</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
