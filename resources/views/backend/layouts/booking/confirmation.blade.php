@extends('backend.master')
@section('content')
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
            <th scope="col">Booking number</th>
            <th scope="col">Room name</th>
            <th scope="col">Room number</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">Email</th>
            <th scope="col">address</th>
            <th scope="col">from_date</th>
            <th scope="col">to_date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>{{$request->id}}</td>
                <td>Booking Number</td>
                <td>{{$request->room->room_name}}</td>
                <td>{{$request->room->room_number}}</td>
                <td>{{$request->name}}</td>
                <td>{{$request->mobile_no}}</td>
                <td>{{$request->email}}</td>
                <td>{{$request->address}}</td>
                <td>{{$request->from_date}}</td>
                <td>{{$request->to_date}}</td>
                <td>{{$request->status}}</td>
                <td>
                <a href="{{route('payment.form',$request->id)}}" class="btn btn-success">payment</a>
                    <a href="{{route('book.approve',$request->id)}}" class="btn btn-success">approve</a>
                    <a href="{{route('book.cancel',$request->id)}}" class="btn btn-danger">cancel</a>

                </td>
            </tr>
           
        </tbody>
    </table>
</div>

@endsection
