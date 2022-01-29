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
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">Total Paid</th>
            <th scope="col">Total_Ammount</th>
            <th scope="col">discount_price</th>
            <th scope="col">from_date</th>
            <th scope="col">to_date</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
             
        </thead>
        <tbody>
            
            <tr>
                <td>{{$request->id}}</td>
           
                <td>{{$request->room->room_name}}</td>
                <td>{{$request->room->room_number}}</td>
                <td>{{$request->name}}</td>
                <td>{{$request->mobile_no}}</td>
                <td>{{$request->total_paid}}</td>
                <td>{{$request->total_ammount}}</td>
                <td>{{$request->discount_price}}</td>
                <td>{{$request->from_date}}</td>
                <td>{{$request->to_date}}</td>
                <td>{{$request->payment_status}}</td>
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
