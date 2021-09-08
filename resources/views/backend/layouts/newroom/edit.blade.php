@extends('backend.master')
@section('content')
<div>
    <!-- <h2"><strong>Hotel Booking Management System/</strong>new room</h2> -->
    <h2>update room</h2>

</div>
<br>
<div class="col-md-6">
    <div class="card">
                <div class="card-body">
                    <form action="{{route('room.update',$room->id)}}" method="post" enctype="multipart/form-data">
                    @method('put')
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
                        <input type="text" value="{{$room->room_name}}" class="form-control form-control"name="room_name" id="Description" placeholder="Room Name">
                    </div>
                    <div class="form-group">
                        <label for="roomNumber">Room Number</label>
                        <input type="text" value="{{$room->room_number}}" class="form-control "name="room_number" id="Description" placeholder="Room Number">
                    </div>
                    


                    <div class="form-group">
                        <label for="squareSelect">Max Adults</label>
                        <select class="form-control input-square"value="{{$room->max_adult}}" name="max_adult" id="squareSelect">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="squareSelect">Max Child</label>
                        <select  class="form-control input-square"value="{{$room->max_child}}" name="max_child" id="squareSelect">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="largeInput">Room Description</label>
                        
                        <textarea type="text" name="room_description" id="Description" class="form-control form-control" placeholder="Description" >{{$room->room_description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="squareSelect">No of bed</label>
                        <select class="form-control input-square"value="{{$room->no_of_bed}}" name="no_of_bed"id="squareSelect">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>


                    <div class="form-group">

                        <label for="exampleFormControlFile1">Imaje</label>
                        <input type="file" value="{{$room->imaje}}" class="form-control-file" name="imaje" id="exampleFormControlFile1">
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="largeInput">price</label>
                        
                        <input type="text" value="{{$room->imaje}}" class="form-control form-control"name="price" id="Description" placeholder="">
                    </div>

                    <div class="card-action">
                        <button class="btn btn-success">update</button>

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
