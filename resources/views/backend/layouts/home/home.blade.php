@extends('backend.master')
@section('content')
<div>
    <h2"><strong>Hotel Booking Management System/</strong>home</h2>
</div>
<br>
<div class="row">
<div class="col-lg-3 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">Total Room Category</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$catagorylist}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-shopping-cart"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">Total Room</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$newroomlist}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-shopping-cart"></i> -->
                </span>
            </div>
        </div>
    </div>
   
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">Booked Room</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$approved}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-heart"></i> -->
                </span>
            </div>
        </div>
    </div>
   

    
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">New Booking</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$newbooking}}</h2>
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-money"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">Total Booking</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$request}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-heart"></i> -->
                </span>
            </div>
        </div>
    </div>
    
  
   
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">Cencel Booking</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$cencel}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-heart"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">Facility</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$facilitylist}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-heart"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-3">
            <div class="card-body">
                <h3 class="card-title text-white">Enquiry</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$enquirylist}}</h2>
                                    
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-users"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">Total customer</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$user}}</h2>
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-money"></i> -->
                </span>
            </div>
        </div>
        
    </div>

    <!-- <div class="col-lg-3 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">Total user</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{$userlist}}</h2>
                </div>
                <span class="float-right display-5 opacity-5">
                    <!-- <i class="fa fa-money"></i> -->
                </span>
            </div>
        </div>
        
    </div> -->

</div>


@endsection
