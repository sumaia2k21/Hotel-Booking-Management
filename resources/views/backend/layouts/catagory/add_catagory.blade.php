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
       
        <form action="{{route('catagory_list')}}" method="post" enctype="multipart/form-data">
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
                        <label for="squareSelect">Max Adults</label>
                        <select class="form-control input-square" name="max_adult" id="squareSelect">
                            <option>Max adult</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="squareSelect">Max Child</label>
                        <select class="form-control input-square" name="max_child" id="squareSelect">
                            <option>Max Child</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="squareSelect">No of bed</label>
                        <select class="form-control input-square" name="no_of_bed"id="squareSelect">
                            <option>No of bed</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>


                    <div class="form-group">

                        <label for="exampleFormControlFile1">Imaje</label>
                        <input type="file" class="form-control-file" name="imaje" id="exampleFormControlFile1">
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