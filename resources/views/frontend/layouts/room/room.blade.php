@extends('frontend.index')
@section('content')
<!-- main-slider -->
<!-- <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Location is heavenly. Best to visit in week days to enjoy the peaceful beauty
                                    </h5>
                                    <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                        Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Our new hotels will play a leading role in prompting the world peace.</h5>
                                    <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                        Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Most hotels train their people with the booklets. We take ours to the ballet.
                                    </h5>
                                    <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                        Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Good tourism will follow good hotels. Experience our luxury hotel rooms</h5>
                                    <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                        Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section> -->
<!-- /main-slider -->
<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center"> Rooms Catagory</h3>
        
        <div class="ban-content-inf row py-lg-3">
        @foreach($room as $showcatagory)
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">{{$showcatagory->catagory_title}}</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span>{{$showcatagory->room_description}}</li>
                            <li><span class="fa fa-bed"></span> {{$showcatagory->price}}</li>
                            
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Room details</a>
                    </div>
                </div>
            </div>
         
            @endforeach
        </div>
        
    </div>
</div>




        @endsection
