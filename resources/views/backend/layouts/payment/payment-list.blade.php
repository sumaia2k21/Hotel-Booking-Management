@extends('backend.master')
@section('content')
<!-- <h4 style="background: #f5c842">Read Enquiry<h4> -->
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

                    <th scope="col">sl</th>
                    <th scope="col">book number</th>
                    <th scope="col">Total Ammount</th>
                    <th scope="col">payment</th>
                    <th scope="col">payment type</th>
                    <th scope="col">transection</th>
                    <th scope="col">payment date</th>
                </thead>
                <tbody>
                @foreach($pay as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->book->room_id}}</td>
                <td>{{$data->total_ammount}}</td>
                <td>{{$data->pay_ammount}}</td>
                <td>{{$data->payment_type}}</td>
                <td>{{$data->transection}}</td>
                <td>{{$data->payment_date}}</td>
                
               
                

            </tr>
            @endforeach()
        </tbody>
            </table>
            
        </div>

        @endsection
