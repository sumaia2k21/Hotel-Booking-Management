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
                <td>{{$list->room->room_number}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->mobile_no}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->from_date}}</td>
                <td>{{$list->to_date}}</td>
                <td>Active</td>
                <td>
                    <a href="" class="btn btn-success">view</a>
                    <a href="{{route('booking.delete',$list->id)}}" class="btn btn-danger">delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
