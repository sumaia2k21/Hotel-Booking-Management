@extends('backend.master')
@section('content')
<!-- <div>
	<h1><strong>Hotel Booking Management System/</strong>Catagory</h1>	
</div> -->

<h2>Catagory/<small>add catagory</small></h2>
<div class="card">
    <!-- <div class="card-header">
											<div class="card-title">Add Catagory</div>
										</div> -->

    <div class="card-body">
       
        <form action="{{route('catagory_list')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="largeSelect">Catagory Title</label>
                <select class="form-control form-control-lg" name="catagory_title" id="Catagory Title">
                    <option>Standard </option>
                    <option>Deluxe</option>
                    <option>Superior Deluxe </option>
                    
                    <option>Premier Deluxe</option>
                    <option>Single</option>
                    <option>Double</option>
                    <option>Twin</option>
                </select>

            </div>
            <div class="form-group">
                <label for="largeInput">Description</label>
                <input type="text" class="form-control form-control"name="description" id="Description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="smallInput">Price</label>
                <input type="text" class="form-control form-control-sm"name="price"id="Price" placeholder="Price">
            </div>


            <div class="card-action">
                <button type="submit" class="btn btn-success">Add</button>

            </div>
            </form>
    </div>


    @endsection
