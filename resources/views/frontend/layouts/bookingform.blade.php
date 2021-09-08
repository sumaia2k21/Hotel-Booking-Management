@extends('frontend.index')
@section('content')

<body>

    <section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <!-- <h2>View your profile</h2> -->
                <p><a href="">Book Your Room</a> &nbsp; / &nbsp; room booking form</p>

            </div>
        </div>
    </section>
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5">
        <div class="contacts-9 py-lg-5 py-sm-4">
            <div class="container">

                <div class="d-grid contact-view">
                    
                    <div class="map-content-9 mt-lg-0 mt-4">
                        @if(session()->has('message'))
                        <span class="alert alert-success">
                            {{ session()->get('message') }}
                        </span>
                        @endif
                        <h2>Book Your Room/<small>room booking</small></h2>
                        <!-- <form action="" method="post">
                            @csrf
                            <div class="twice">
                                    <input type="text" name="name" id="firstName" placeholder="Full Name" class="form-control"
                                    required="">
                            </div>
                            <div class="twice">
                                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                                    required="">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="mobile_no" id="w3lName"
                                    placeholder="Mobile No" required="">
                            </div>

                            <div class="twice">

                                
                                    <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="mobile_no" id="w3lName"
                                    placeholder="Mobile No" required="">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="mobile_no" id="w3lName"
                                    placeholder="Mobile No" required="">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="mobile_no" id="w3lName"
                                    placeholder="Mobile No" required="">
                            </div>


                            <button type="submit" class="btn btn-primary">update</button>
                        </form> -->
                        <form action="{{route('booking.store')}}" method="POST">
                        @csrf
                        <div class="twice">
                            <input type="hidden" name="room_id" value="{{$room->id}}">
                           
                                <input type="text" name="name" id="firstName" placeholder="Full Name" class="form-control"
                                required="">
                               
                            </div>
                            
                        <div class="twice">
                            
                                <input readonly type="text" value="{{$room->room_number}}" id="firstName"  class="form-control"
                                required="">
                               
                            </div>
                            
                        <div class="twice">

                           
                            <input type="text" name="mobile_no" id="firstName" placeholder="Mobile_no" class="form-control" >
                                 

                            
                        </div>
                        <div class="twice">

                            
                                <input type="email" name="email"  id="email" placeholder="Email" class="form-control">
                           
                        </div>
                        <div class="twice">

                        <textarea type="text" name="address" id="address" placeholder="Address" class="form-control"></textarea>
                                
                           
                        </div>

                        <div class="twice">
                           
                            <input type="date" name="checkin" placeholder="Date" required="">
                        </div>
                        <div class="twice">
                           
                            <input type="date" name="checkout" placeholder="Date" required="">
                        </div>  <br>
                        <div class="twice">
                            <button type="submit" class="btn btn-primary "> send  </button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact1 -->



    @endsection
