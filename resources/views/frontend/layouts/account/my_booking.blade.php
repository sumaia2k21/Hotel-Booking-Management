@extends('frontend.index')
@section('content')

<section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>My Booking Details</h2>    
            </div>
        </div>
    </section>
    <br>
    <!-- <h1 style="text-align: center;">My Hotel Booking Detail</h1> -->
    <br>
<div class="card">
    <table class="table table-bordered">
        <thead>
            
        <!-- <th scope="col">S.No</th> -->
        <th scope="col">Booking number</th>
            <th scope="col">Name</th>
            <th scope="col">From_date</th>
            <th scope="col">To_date</th>
            <th scope="col">Total_ammount</th>
            <th scope="col">Discount_price</th>
            <th scope="col">Payment_status</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Status</th>
            <!-- <th scope="col">Action</th> -->
            
        </thead>
        <tbody>
        @foreach($book as $request)
            <tr>
                <!-- <td>{{$request->id}}</td> -->
                
                <td>{{$request->id }}</td>
                <td>{{$request->name }}</td>
                <td>{{$request->from_date }}</td>
                <td>{{$request->to_date}}</td>
                <td>{{$request->total_ammount}}</td>
                <td>{{$request->discount_price}}</td>
                <td>{{$request->payment_status}}</td>
                   <td>{{$request->status}}</td>
                
               
                <td>
                 <a href="{{route('invoice',$request->id)}}" type="button" class="btn btn-primary">booking details</a>
                 
                 <a href="{{route('user.cancel',$request->id)}}" class="btn btn-danger">cancel</a>
                </td>
            </tr>
           

            @endforeach
          
            
          
        </tbody>
    </table>    
</div>

<br>
<br>
<br>
   
@endsection
