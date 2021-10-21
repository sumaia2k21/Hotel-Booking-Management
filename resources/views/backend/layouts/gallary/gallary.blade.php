@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel Booking Management System/</strong>facilities</h1>	
</div> -->
<br>

<h2 >Add Gallary</h2>
<div class="card">
  

    <div class="card-body">
        <form action="{{route('gallaries.post')}}"method="post"enctype="multipart/form-data" >
            @csrf
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image1</label>
            <input class="form-control form-control-sm" name='image1' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image2</label>
            <input class="form-control form-control-sm" name='image2' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image3</label>
            <input class="form-control form-control-sm" name='image3' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image4</label>
            <input class="form-control form-control-sm" name='image4' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image5</label>
            <input class="form-control form-control-sm" name='image5' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image6</label>
            <input class="form-control form-control-sm" name='image6' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image7</label>
            <input class="form-control form-control-sm" name='image7' id="formFileSm" type="file">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image8</label>
            <input class="form-control form-control-sm" name='image8' id="formFileSm" type="file">
        </div>
        
        

        <div class="card-action">
            <button class="btn btn-success">add </button>

        </div>
        </form>
    </div>
</div>
    @endsection
