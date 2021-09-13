@extends('backend.master')
@section('content')
<br>

<div class="card">

    <div class="card-header">
        <div class="card-title">
            <h2>add staff<h2>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('staff.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="smallInput">Name</label>
                <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Staff name">
            </div>
            <div class="form-group">
                <label for="squareSelect">Type</label>
                <select class="form-control input-square" name="role" id="type">
                    <option>Manager</option>
                    <option>Receptionist</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="largeInput">Password</label>
                <input type="Password" name="password" id="Password" placeholder="Password"
                    class="form-control"></input>


            </div>
            <div class="form-group">
                <label for="largeInput">Mobile Number</label>
                <input type="text" name="mobile" class="form-control form-control" id="mobile_no"
                    placeholder="mobile_no">
            </div>
           
           
           
            <br>
            <div class="form-group">

                <button type="submit" class="btn btn-success">add staff</button>

            </div>
        </form>


    </div>

</div>


@endsection
