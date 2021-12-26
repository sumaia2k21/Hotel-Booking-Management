@extends('backend.master')
@section('content')
<div>
    <!-- <h2"><strong>Hotel Booking Management System/</strong>new room</h2> -->
    <h2>New room/<small>add room</small></h2>

</div>
<br>
<div class="col-md-6">
    <div class="card">
                <div class="card-body">
                    <form action="{{route('roomlist')}}" method="post" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group">
                        <label for="largeSelect">Catagory Title</label>
                        <select class="form-control form-control-lg"name="catagory_title" id="Catagory Title">
                            @foreach($catagory as $cat)
                            <option value="{{$cat->id}}">{{$cat->catagory_title}} </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="largeInput">Room name</label>
                        <input type="text" class="form-control form-control"name="room_name" id="Description" placeholder="Room Name">
                    </div>
                    <div class="form-group">
                        <label for="roomNumber">Room Number</label>
                        <input type="text" class="form-control "name="room_number" id="Description" placeholder="Room Number">
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
                        <textarea type="text" class="form-control form-control"name="room_description" id="Description" placeholder="Description">
                        </textarea>
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
                    <!-- <div class="form-group">
                        <label for="name">Select Amenities</label>
                        <select multiple="multiple"  class="form-control" name="facilities_id[]" id="">
                        @foreach($amenities as $data)
                        <option value="{{$data->id}}">{{$data->facility_title}}</option>
                        @endforeach
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="name">Select Amenities</label>
                        @foreach($amenities as $data)
                        <div class="form-check">
                        <input class="form-check-input" multiple="multiple" type="checkbox" value="{{$data->id}}" id="flexCheckDefault"name="facilities_id[]">
                        <label class="form-check-label" for="flexCheckDefault">
                        {{$data->facility_title}}
                        </label>
                        </div>
                        @endforeach
                        </div>
                <br>
                 <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="largeInput">price</label>
                        <input type="text" class="form-control form-control"name="price" id="Description" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="largeInput">discount</label>
                        <input type="text" class="form-control form-control"name="discount" id="Description" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="squareSelect">status</label>
                        <select class="form-control input-square" name="status"id="squareSelect">
                            <option selected>Active</option>
                            <option>Inactive</option>
                           
                        </select>
                    </div>

                    <div class="card-action">
                        <button class="btn btn-success">Add</button>

                    </div>
                    </form>
                </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        
    </div>
    <div class="col-md-6"></div>
</div>
@endsection
