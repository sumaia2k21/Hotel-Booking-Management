@extends('backend.master')
@section('content')


<div class="card">
    <table class="table table-bordered">
        <thead>
            <th scope="col">Book.no</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">From_date</th>
            <th scope="col">To_date</th>
            <th scope="col">Total ammount</th>
            <th scope="col">Total Paid</th>
            <th scope="col">Pay Status</th>
            <th scope="col">Status</th>
            
            <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($request as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->mobile_no}}</td>
                <td>{{$list->from_date}}</td>
                <td>{{$list->to_date}}</td>
                <td>{{$list->total_ammount}}</td>
                <td>{{$list->total_paid}}</td>
                <td>{{$list->payment_status}}</td>
                <td>{{$list->status}}</td>
               
                <td>
                <a href="{{route('payment.form',$list->id)}}" class="btn btn-success">payment</a>
                    <a href="{{route('book.approve',$list->id)}}" class="btn btn-primary">approve</a>
                    <a href="{{route('book.cancel',$list->id)}}" class="btn btn-danger">cancel</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
