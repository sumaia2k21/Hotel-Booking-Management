@extends('backend.master')
@section('content')


<div class="card">
        <table class="table table-striped table-hover">
        <thead >
                <th scope="col">Sl</th>
                    <th scope="col">Book number</th>
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
                    @if($payment->count()>0)
                @foreach($payment as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->room_id}}</td>
                <td>{{$data->total_ammount}}</td>
                <td>{{$data->total_paid}}</td>
                <td>{{$data->discount_price}}</td>
                <td>{{$data->pay_ammount}}</td>
                <td>{{$data->due}}</td>
               <td>{{$data->payment_type}}</td>
                <td>{{$data->transection}}</td>
                <td>{{$data->payment_date}}</td>
                <td>{{$data->payment_status}}</td>
                
            </tr>
            @endforeach()
            @else
            <div>
                <h2>No Payment Found</h2>
            </div>
            @endif
        </tbody>
            </table>
            
 </div>
 @endsection