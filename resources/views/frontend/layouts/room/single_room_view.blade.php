@extends('frontend.index')
@section('content')

 

        <!-- room-single-block -->
        <section class="room-single-block">
            <div class="content-with-slider">
                <div class="container">
                
                    <div class="content-photo-1 d-grid">
                        <div class="content-photo-left text-center">
                            <h4>Luxury Hotel</h4>
                            
                            <h6>{{$singleroom->catagory->catagory_title}} </h6>
                            <div class="border-line">
                                <div class="bg">
                                    <span class="price">{{$singleroom->price}} TK</span>
                                    <p> Per night</p>
                                </div>
                                <div class="book-btn px-2">
                                    <a href="{{route('bookingform',$singleroom->id)}}" class="btn btn-style btn-secondary mt-3">Book Now</a>
                                </div>
                            </div>
                            <ul class="room-amenities">
                                <li><a href="#url"><span class="fa fa-beer"></span>{{$singleroom->room_number}}</a></li>
                                <li><a href="#url"><span class="fa fa-users"></span>{{$singleroom->max_adult}} </a></li>
                                <li><a href="#url"><span class="fa fa-bed"></span> </a> {{$singleroom->no_of_bed}}</li>
                            </ul>
                            <a href="{{route('all.room.view')}}" class="back"> <span class="fa fa-long-arrow-left"></span> Back to all
                                rooms</a>
                        </div>
                        <div class="content-photo-right">
                            <div class="csslider infinity" id="slider1">
                                <input type="radio" name="slides" checked="checked" id="slides_1" />
                                <input type="radio" name="slides" id="slides_2" />
                                <input type="radio" name="slides" id="slides_3" />
                                <input type="radio" name="slides" id="slides_4" />
                                <ul class="banner_slide_bg">
                                    <li>
                                        <img class="img" src="{{url('uploads/'.$singleroom->image)}}" alt="">
                                    </li>
                                    <li>
                                        <img class="img" src="" alt="">
                                    </li>
                                    <li>
                                        <img class="img" src="" alt="">
                                    </li>
                                    <li>
                                        <img class="img" src="" alt="">
                                    </li>
                                </ul>
                                <div class="arrows">
                                    <label for="slides_1"></label>
                                    <label for="slides_2"></label>
                                    <label for="slides_3"></label>
                                    <label for="slides_4"></label>
                                </div>
                                <div class="navigation">
                                    <div>
                                        <label for="slides_1"></label>
                                        <label for="slides_2"></label>
                                        <label for="slides_3"></label>
                                        <label for="slides_4"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </section>
        <!-- //room-single-block -->
        <section class="w3l-roomsingleblock1 py-5">
        
            <div class="container py-sm-4">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{url('uploads/'.$singleroom->image)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{url('uploads/'.$singleroom->image)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 roomsingle mt-lg-0 mt-4">
                        <h3 class="title-small">The Room</h3>
                        

                        <p class="roomsingle mt-3">{{$singleroom->room_description}}
                            </p>
                    </div>
                </div>
            </div>
        
        </section>
        <section class="w3l-roomsingleblock1 py-5">
       
            <div class="container py-sm-4">
                <div class="row">
                    <div class="col-lg-7 roomsingle">
                        <h3 class="title-small">Amenities provided by our hotel</h3>
                        <ul class="w3l-right-book mt-4">
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Flat screen TV</a>
                            </li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Free high-speed
                                    WiFi</a></li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Private Bathroom</a>
                            </li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Free parking space</a>
                            </li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Early Check-in</a>
                            </li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Swimming pool</a></li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Air-conditioning</a>
                            </li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Welcome treatment</a>
                            </li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Barrier-free rain
                                    shower</a></li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Aesop bath
                                    amenities</a></li>
                            <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Bike rental
                                    facility</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-4">
                        <img src="{{url('uploads/'.$singleroom->image)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            
        </section>


        
@endsection
