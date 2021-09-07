@extends('backend.master')
@section('content')

<div class="col-md-6">

    <div class="card">



        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="squareSelect">Name</label>
                    <input type="text" class="form-control" name="name" id="email" placeholder="room name">
                </div>
                <div>



                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>



                    <div class="form-group">
                        <label for="largeSelect">Catagory Title</label>
                        <select class="form-control form-control-lg" name="catagory_title" id="Catagory Title">
                            <option>Standard </option>
                            <option>Deluxe</option>
                            <option>Superior Deluxe </option>
                            <option>Single</option>
                            <option>Premier Deluxe</option>
                        </select>

                    </div>

                    <div class="form-check">
                        <label>Gender</label><br />
                        <label class="form-radio-label">
                            <input class="form-radio-input" type="radio" name="gender" value="male" checked="">
                            <span class="form-radio-sign">Male</span>
                        </label>
                        <label class="form-radio-label ml-3">
                            <input class="form-radio-input" type="radio" name="gender" value="female">
                            <span class="form-radio-sign">Female</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" name="comment" id="comment" rows="5">

                    </textarea>
                    </div>


                    <div class="form-group">
                        <label for="squareSelect">Address</label>
                        <input type="text" class="form-control input-pill" name="address" id="pillInput"
                            placeholder="address">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pillInput">Price</label>
                        <input type="text" class="form-control input-pill" name="price" id="pillInput"
                            placeholder="Price">
                    </div>

                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>

                    </div>
            </form>
        </div>

    </div>
</div>
@endsection
