@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel Booking Management System/</strong>facilities</h1>	
</div> -->
<br>

<h2 style="background: #cccccc">Add Facilities</h2>
<div class="card">
    
    <div class="card-body">
        <form action="{{route('facility_list')}}"method="post"enctype="multipart/form-data" >
            @csrf
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image</label>
            <input class="form-control form-control-sm" name='imaje' id="formFileSm" type="file">
        </div>
        
        <div class="form-group">
            <label for="smallInput">Facilities title</label>
            <input type="text" class="form-control form-control-sm" name='facility_title' id="Price" placeholder="facilities" required>
        </div>
        
        <div class="form-group">
            <label for="largeInput">Description</label>
            <input type="text" class="form-control form-control" name='description' id="Description" placeholder="Description">
        </div>


        <div class="card-action">
            <button class="btn btn-success">Add</button>

        </div>
        </form>
    </div>
</div>
    @endsection
