@extends('backend.master')
@section('content')

<div class="header-left" style="float: right;">
            <div class="input-group icons">
                
            <form action="{{route('payment.search')}}" method="get">
                      
                        <input type="text" class="form-control" placeholder="Search Dashboard" name="search" aria-label="Search Dashboard">
                        <button type="submit"><i
                            class="mdi mdi-magnify" type="submit" ></i></button>
                    </form>
                
            </div>
        </div>
    <h2>Payment</h2>
    
    <hr>
    <br>
<!-- @if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
	</span>
@endif  -->
     
<div class="card">
        <table class="table table-striped table-hover">
        <thead >

                    <th scope="col">Sl</th>
                    <th scope="col">Book number</th>
                    <th scope="col"> User Name</th>
                    <th scope="col"> Mobile_no</th>
                    <th scope="col">Total Ammount</th>
                    <th scope="col">Total Paid </th>
                    <th scope="col">Discount Price</th>
                    <th scope="col">Payment</th>
                    <th> Due</th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Transection</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                @foreach($pay as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->book->room_id}}</td>
                <td>{{$data->book->name}}</td>
                <td>{{$data->book->mobile_no}}</td>
                <td>{{$data->total_ammount}}</td>
                <td>{{$data->book->total_paid}}</td>
                <td>{{$data->discount_price}}</td>
                <td>{{$data->pay_ammount}}</td>
                <td>{{$data->due}}</td>
               <td>{{$data->payment_type}}</td>
                <td>{{$data->transection}}</td>
                <td>{{$data->payment_date}}</td>
                <td>{{$data->payment_status}}</td>
                <td>
                    <!-- <a href="{{route('payment.edit',$data->id)}}" class="btn btn-success">edit</a> -->
                    <a href="{{route('payment.delete',$data->id)}}" class="btn btn-danger">delete</a>
                    <a href="{{route('payment.report',$data->id)}}" class="btn btn-success">details</a>
                </td>
            </tr>
            @endforeach()
        </tbody>
            </table>
            
 </div>

 @endsection
