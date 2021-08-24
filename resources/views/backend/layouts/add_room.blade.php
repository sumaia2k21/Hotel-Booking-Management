@extends('backend.master')
@section('content')
<div>
    <h2"><strong>Hotel Booking Management System/</strong>new room</h2>
</div>
<br>
<div class="col-md-6">
    <div class="card">

        <!-- <div class="card-header">
											<div class="card-title"><h2>Add Room</h2></div>
										</div> -->
        <h4 style="background: #cccccc">Add Room<h4>
                <div class="card-body">
                    <form action="{{route('roomlist')}}" method="post">
                        @csrf

                    <div class="form-group">
                        <label for="largeSelect">Catagory Title</label>
                        <select class="form-control form-control-lg"name="catagory_title" id="Catagory Title">
                            <option>Standard </option>
                            <option>Deluxe</option>
                            <option>Superior Deluxe </option>
                            <option>Single</option>
                            <option>Premier Deluxe</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="squareSelect">Max Adults</label>
                        <select class="form-control input-square" name="max_adult" id="squareSelect">
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
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="largeInput">Room Description</label>
                        <input type="text" class="form-control form-control"name="room_description" id="Description" placeholder="Description">
                    </div>

                    <div class="form-group">
                        <label for="squareSelect">No of bed</label>
                        <select class="form-control input-square" name="no_of_bed"id="squareSelect">
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
                    <!-- <div class="form-group">
                        <label for="smallInput">Room Facilities</label>
                        <input type="text" class="form-control form-control-sm"name="room_facility" id="Price" placeholder="">
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="squareSelect">Room Facilities</label>
                        <select class="form-control input-square" name="room_facility"id="squareSelect">
                            <option>wifi</option>
                            <option>breatfast</option>
                            <option>transport</option>
                            
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="largeInput">price</label>
                        <input type="text" class="form-control form-control"name="price" id="Description" placeholder="">
                    </div>

                    <div class="card-action">
                        <button class="btn btn-success">Add</button>

                    </div>
                    </form>
                </div>

    </div>
</div>
@endsection
