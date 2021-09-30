@extends('backend.master')
@section('content')
<div>
    <h2><strong>Cancel/</strong>list</h2>
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
            @foreach($request as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>Booking Number</td>
                <td>{{$list->room->room_name}}</td>
                <td>{{$list->room->room_number}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->mobile_no}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->from_date}}</td>
                <td>{{$list->to_date}}</td>
                <td>{{$list->status}}</td>
                <td>
                    <a href="{{route('book.confirmation',$list->id)}}" class="btn btn-success">view</a>
                    <a href="{{route('booking.delete',$list->id)}}" class="btn btn-danger">delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
