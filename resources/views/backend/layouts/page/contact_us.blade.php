@extends('backend.master')
@section('content')

<div class="card">

    <div class="card-header">
        <div class="card-title">
            <h2>Contact Us<h2>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('contact_us.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="smallInput">Page title title</label>
                <input type="text" name="name" value="{{$contact->name??''}}" class="form-control form-control-sm" id="Price"
                    placeholder="Page title title">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" value="{{$contact->email??''}}"  class="form-control" id="email" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="largeInput">Mobile Number</label>
                <input type="text" name="mobile_no" value="{{$contact->mobile_no??''}}" class="form-control form-control" id="Description"
                    placeholder="Mobile Number">
            </div>
            <div class="form-group">
                <label for="largeInput">Page Description</label>
                <textarea type="text" name="description"  id="Description" placeholder="Description"
                    class="form-control">{{$contact->description??''}}</textarea>


            </div>
            <br>
            <div class="card-action">

                <button type="submit" class="btn btn-success">update</button>

            </div>
        </form>


    </div>

</div>






@endsection
