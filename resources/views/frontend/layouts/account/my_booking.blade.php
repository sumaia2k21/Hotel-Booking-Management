@extends('frontend.index')
@section('content')

<section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>ghjk</h2>
                
            </div>
        </div>
    </section>

    <br>
    <h1 style="text-align: center;">My Hotel Booking Detail</h1>
    <br>
<div class="card">
    <table class="table table-bordered">
        <thead>
              <!-- <th scope="col">S.No</th> -->
            <th scope="col">Booking number</th>
            <th scope="col">Room number</th>
            <th scope="col">Room name</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">Email</th>
            <th scope="col">from date</th>
            <th scope="col">to date</th>
            <th scope="col">Total ammount</th>
           <th scope="col">Status</th>
           <th scope="col">action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($bookstatus as $list)
            <tr>
            <!-- <td>{{$loop->iteration}}</td>  -->
            <!-- <td>{{$list->id}}</td> -->
            <td>{{$list->id}}</td>
                <td>{{$list->room->room_number}}</td>
                <td>{{$list->room->room_name}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->mobile_no}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->from_date}}</td>
                <td>{{$list->to_date}}</td>
                <td>{{$list->discount_price}}</td>
                <td>{{$list->status}}</td>
                
                <td><a href="{{route('invoice',$list->id)}}" type="button" class="btn btn-primary">booking details</a>
                   </td>
                
            </tr>
           @endforeach
        </tbody>
    </table>
    
    
</div>
<!-- <a href="{{route('testinvoice')}}" type="button" class="btn btn-primary">Print</a> -->
<br>
<br>
<br>
   
@endsection
