@extends('frontend.index')
@section('content')


<link rel="stylesheet" href="{{url('/css/login.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<body>
     <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div class="hotel_reserve_box">
                    <h3> Book Your </h3><br>
                    <form action="{{route('booking.store')}}" method="POST">
                        @csrf
                        <div class="form-group">

                            <div class="col-sm-9">
                                <input type="text" name="name" id="firstName" placeholder="Full Name" class="form-control"
                                    autofocus>
                                </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-9">
                                <input type="text" name="mobile_no" id="firstName" placeholder="Mobile_no" class="form-control"
                                    >

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-9">
                                <input type="email" name="email"  id="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-9">
                                <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-input col-md-4 col-sm-6 mt-3">
                            <label>Check-in </label>
                            <input type="date" name="checkin" placeholder="Date" required="">
                        </div>
                        <div class="form-input col-md-4 col-sm-6 mt-3">
                            <label>Check-out </label>
                            <input type="date" name="checkout" placeholder="Date" required="">
                        </div>  <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Book </button>
                        </div>
                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> My booking details </button>
                        </div> -->
                      </form>
                </div>
            </div>
        </div>
    </div>

<style>
    #output {
        /* background-color: #c5edf3; */
        color: #463c39;
        font-size: 17px;
        padding: 30px 30px;
        width: 40%;
        border: 2px solid #009688;
        font-family: sans-serif;
        line-height: 1.8;
    }

    #newPublish {
        /* background-color: #c5edf3; */
        color: #463c39;
        font-size: 17px;
        padding: 30px 30px;
        width: 40%;
        border: 2px solid #009688;
        font-family: sans-serif;
        line-height: 1.8;
    }

    .box {
        /* background-color: #f7f7f7; */
        margin-top: 60px;
        margin-bottom: 50px;
        padding: 40px 60px;
    }

    #details_info {
        /* background-color: #f7f7f7; */
        color: #463c39;
        font-size: 17px;
        padding: 30px 30px;
        width: 40%;
        border: 1px solid #cccccc;
        font-family: sans-serif;
        line-height: 1.8;
        margin-left: 90px;
    }

    .box3 {
        margin-top: 80px;
        margin-left: 150px;
        margin-right: 150px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: gainsboro;
    }

    .box11 {
        margin-top: 80px;
        margin-left: 250px;
        margin-right: 250px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: gainsboro;
        line-height: 2.5;
    }

    .web_design_box {
        margin-top: 30px;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: #d9edf7;
        box-shadow: 3px 5px 10px #318f86;
    }

    .hotel_reserve_box {
        margin-top: 30px;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 40px 50px;
        /* background-color: #c6badc; */
        box-shadow: 3px 5px 10px #7527b0;
    }

    .online_food_delivery_box {
        margin-top: 50px;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 20px 40px;
        background-color: #d4c0b9;
        box-shadow: 3px 5px 10px #714c4a;
    }

    .result_box {
        margin-top: 15%;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 20px 40px;
        background-color: #d4c0b9;
        box-shadow: 3px 5px 10px #8BC34A;
    }

    .result_box_text {
        color: #232222;
        font-size: 20px;
        text-align: center;
        padding-top: 10px;
    }

    .result_box_text span {
        color: #614136;
        font-size: 26px;
        text-align: center;
    }

</style>

@endsection
