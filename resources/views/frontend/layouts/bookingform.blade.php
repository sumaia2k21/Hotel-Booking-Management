@extends('frontend.index')
@section('content')

<body>
<!-- old booking form -->
    <!-- <section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
               
                <p><a href="">Book Your Room</a> &nbsp; / &nbsp; room booking form</p>

            </div>
        </div>
    </section>
   
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

                        <form action="{{route('booking.store')}}" method="POST">
                            @csrf
                            <div class="twice">
                                <input type="hidden" name="room_id" value="{{$room->id}}">
                                <input type="text" name="name" id="firstName" placeholder="Full Name"
                                    value="{{$bookingform->name}}" class="form-control" required="">
                            </div>
                            <div class="twice">
                                <input readonly type="text" value="{{$room->room_number}}" id="firstName"
                                    class="form-control" required="">
                            </div>
                            <div class="twice">
                                <input type="text" name="mobile_no" id="firstName" placeholder="Mobile_no"
                                    value="{{$bookingform->mobile}}" class="form-control">
                            </div>
                            <div class="twice">

                                <input type="email" name="email" id="email" placeholder="Email"
                                    value="{{$bookingform->email}}" class="form-control">
                            </div>
                            <div class="twice">
                                <textarea type="text" name="address" id="address" placeholder="Address"
                                    class="form-control"></textarea>
                            </div>
                            <div class="twice">
                                <label>checkin date</label>
                                <input type="date" name="checkin" placeholder="Date" required="">
                            </div>
                            <div class="twice">
                                <label>checkout date</label>
                                <input type="date" name="checkout" placeholder="Date" required="">
                            </div>
                            <div class="twice">
                                <label for="groups">Gender</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <br>
                            <div class="twice">
                                <button type="submit" class="btn btn-primary "> send </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
     -->
   
<section class="w3l-booking-top">
    <!-- /form-16-section -->
    <div class="booking-form-61">
        <div class="container">
            <div class="booking-top-gds">
                <div class="booking-forms-16-info align-self">
                    <h5>Your Reservation</h5>
                    <h3 class="title-big">Select the Room, check for availability and book it.</h3>
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur
                        adipisicing elit Ea consequuntur illum.</p>
                </div>
                <div class="form-right-inf">
                <div class="booking-form-content">
                        @if(session()->has('message'))
                        <span class="alert alert-success">
                            {{ session()->get('message') }}
                        </span>
                        @endif
                        <h2>Book Your Room</h2>
                            <br>
                            <br>
                        <form action="{{route('booking.store')}}" method="POST">
                            @csrf
                            <div class="twice">
                                <input type="hidden" name="room_id" value="{{$room->id}}">
                                <input type="text" name="name" id="firstName" placeholder="Full Name"
                                    value="{{$bookingform->name}}" class="form-control" required="">
                            </div>
                            <div class="twice">
                                <input readonly type="text" value="{{$room->room_number}}" id="firstName"
                                    class="form-control" required="">
                            </div>
                            <div class="twice">
                                <input type="text" name="mobile_no" id="firstName" placeholder="Mobile_no"
                                    value="{{$bookingform->mobile}}" class="form-control">
                            </div>
                            <div class="twice">

                                <input type="email" name="email" id="email" placeholder="Email"
                                    value="{{$bookingform->email}}" class="form-control">
                            </div>
                            <div class="twice">
                                <textarea type="text" name="address" id="address" placeholder="Address"
                                    class="form-control"></textarea>
                            </div>
                            <div class="twice">
                                <label>From date</label>
                                <input value="{{$value[1]}}" type="date" class="form-control" name="from_date" placeholder="Date" required="">
                            </div>
                            <div class="twice">
                                <label>To date</label>
                                <input value="{{$value[3]}}" type="date"class="form-control" name="to_date"  placeholder="Date" required="">
                            </div>
                             <div class="twice">
                                <label>total Ammount</label>
                                <!-- <input value="{{$bookingform->total_ammount}}" class="form-control" type="number" name="total_ammount" required=""> -->
                            </div> 
                            <div class="twice">
                        <label for="squareSelect">status</label>
                        <select class="form-control" name="status">
                            <option readonly>pending</option>
                            
                           
                        </select>
                    </div>
                            <br>
                            <div class="twice">
                                <button type="submit" class="btn btn-primary "> send </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    @endsection
