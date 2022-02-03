@extends('backend.master')
@section('content')
<div>
    <h2><strong>Booking/</strong>list</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('booking.search')}}" method="get" id="step-form-horizontal" class="step-form-horizontal">
                <div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="date" name="from_date" class="form-control" placeholder="from_date"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="date" name="to_date" class="form-control" placeholder="to_date" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">search</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<a href="{{route('all.booking.report')}}" type="button" class="btn btn-primary">Print</a>

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
            <th scope="col">book.no</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">From_date</th>
            <th scope="col">To_date</th>
            <th scope="col">Total ammount</th>
            <th scope="col">Total Discount price</th>
            <th scope="col">Total Paid</th>
            <th scope="col">Pay Status</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
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
                <td>{{$list->discount_price}}</td>
                <td>{{$list->total_paid}}</td>
                <td>{{$list->payment_status}}</td>
                <td>{{$list->status}}</td>
                <td>
                <a href="{{route('book.confirmation',$list->id)}}" class="btn btn-success">details</a>
                </td>
                <td>
                <a href="{{route('backend.single.view',$list->id)}}" class="btn btn-primary">view</a>
                <a href="{{route('booking.delete',$list->id)}}" class="btn btn-danger">delete</a>
                    
                   
                </td>

                <!-- <td>
                <a href="{{route('payment.form',$list->id)}}" class="btn btn-success">payment</a>
                    <a href="{{route('book.approve',$list->id)}}" class="btn btn-success">approve</a>
                    <a href="{{route('book.cancel',$list->id)}}" class="btn btn-danger">cancel</a>
                    <a href="{{route('booking.delete',$list->id)}}" class="btn btn-danger">delete</a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection
