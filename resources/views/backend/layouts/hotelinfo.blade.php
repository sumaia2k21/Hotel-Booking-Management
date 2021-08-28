@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel information/</strong>add info</h1>	
</div> -->
<!-- <br> -->
<h5>Hotel Information</h5>

<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="largeInput">Hotel Name</label>
                <input type="text" class="form-control form-control" name='hotel_name' id="Description"
                    placeholder="hotel name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="formFileSm" class="form-label">Logo</label>
                <input class="form-control form-control-sm" name='imaje' id="formFileSm" type="file">
            </div>
            <div class="form-group">
                <label for="smallInput">Address</label>
                <input type="text" class="form-control form-control-sm" name='address' id="Price" placeholder="address">
            </div>
            <div class="form-group">
                <label for="largeInput"> Contact No </label>
                <input type="text" class="form-control form-control" name='hotel_name' id="Description"
                    placeholder="cell no">
            </div>
            <div class="card-action">
                <button class="btn btn-success">Add</button>

            </div>
        </form>
    </div>

    @endsection
