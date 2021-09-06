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
                            </span>{{$showcatagory->room_description}}</li>
                            </span> {{$showcatagory->price}}</li>
                            <li><span class="fa fa-users"></span>{{$showcatagory->max_adult}}</li>
                            <li><span class="fa fa-users"></span>max_child  {{$showcatagory->max_child}}</li>
                            <li><span class="fa fa-bed"></span> no of bed#{{$showcatagory->no_of_bed}}</li>
                            

                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="{{route('catagory-under-room',$showcatagory->id)}}"  class="btn btn-style btn-primary mt-sm-4 mt-3">view room</a>
                    </div>
                   
                </div>
            </div>
         
            @endforeach
        </div>
         
        
    </div>
</div>

<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <h3 class="title-big text-center">Our Rooms are beautifully designed</h3>
            <div class="middle-section row mt-lg-5 pt-md-3">
                <div class="three-grids-columns col-lg-4 col-md-6">
                    <img src="assets/images/slide1.jpg" alt="" class="img-fluid">
                    <div class="info">
                        <h4><a href="#url"> Restaurant and Bar</a></h4>
                        <p>Vestibulum ante ipsum primis in orci luctus et ultrices posuere cubilia Curae; Nulla
                            mollis dapibus nunc.</p>
                        <a href="services.html" class="btn mt-4">Read More </a>
                    </div>
                </div>
                <div class="three-grids-columns col-lg-4 col-md-6 mt-md-0 mt-4">
                    <img src="assets/images/slide2.jpg" alt="" class="img-fluid">
                    <div class="info">
                        <h4> <a href="#url"> Meetings and Events </a></h4>
                        <p>Vestibulum ante ipsum primis in orci luctus et ultrices posuere cubilia Curae; Nulla
                            mollis dapibus nunc.</p>
                        <a href="services.html" class="btn mt-4">Read More </a>
                    </div>
                </div>
                <div class="three-grids-columns col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <img src="assets/images/slide3.jpg" alt="" class="img-fluid">
                    <div class="info">
                        <h4> <a href="#url"> Spa and Wellness </a></h4>
                        <p>Vestibulum ante ipsum primis in orci luctus et ultrices posuere cubilia Curae; Nulla
                            mollis dapibus nunc.</p>
                        <a href="services.html" class="btn mt-4">Read More </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




        @endsection
