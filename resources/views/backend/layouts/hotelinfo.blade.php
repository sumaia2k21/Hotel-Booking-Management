@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel information/</strong>add info</h1>	
</div> -->
<!-- <br> -->
<h5>Hotel Information</h5>

<div class="card">
    <div class="card-body">
        <form action="{{route('hotelinfo.store')}}"method="post">
            @csrf
           
          
            <div class="form-group">
                <label for="name">Hotel Name</label>
                <input type="text" class="form-control " name='hotel_name' id="hotel_name"
                    placeholder="hotel name"value="{{$checkinfo->name??''}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email"name="email" class="form-control" id="email" placeholder="email"value="{{$checkinfo->email??''}}">
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input class="form-control " name='imaje' id="formFileSm" type="file"value="{{$checkinfo->logo??''}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name='address' id="Price" placeholder="address"value="{{$checkinfo->address??''}}">
            </div>
            <div class="form-group">
                <label for="contact_no"> Contact No </label>
                <input type="text" class="form-control " name='contact_no' id="Description"
                    placeholder="cell no"value="{{$checkinfo->contact_no??''}}">
            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Add</button>

            </div>
        </form>
    </div>

    @endsection
