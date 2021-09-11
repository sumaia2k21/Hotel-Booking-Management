@extends('frontend.index')
@section('content')
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
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
</section>
<!-- /main-slider -->
<section class="w3l-servicesblock1" id="service">

    <div class="features-with-17_sur py-5">
        <div class="container py-lg-5 py-sm-4">
            <h2 style="text-align: center;"> Our Services</h2>
            <div class="features-with-17-top_sur">
                <div class="row">
                    @foreach($facility as $survic)
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-bed" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h5>Fitness Zone</h5>
                                <h6><a href="#url">{{$survic->facility_title}}</a></h6>
                                <p>Lorem ipsum dolor sit amet elit. Id, minima. It is a long fact that a reader will be
                                    distracted by the readable.</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <!-- <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-3 pb-lg-5">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">
                        <h3 class="title-small">Check Availability</h3>
                        <form action="search-results.html" method="post" class="signin-form">
                            <div class="row book-form">
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-in Date</label>
                                    <input type="date" name="" placeholder="Date" required="">
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-out Date</label>
                                    <input type="date" name="" placeholder="Date" required="">
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Adults</label>
                                    <select class="selectpicker">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                    </select>

                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Children</label>
                                    <select class="selectpicker">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                    </select>

                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Price </label>
                                    <input type="text" name="" placeholder="Max Price ($)" required />
                                </div>
                                <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                                    <label>Check availability </label>
                                    <button class="btn btn-style btn-primary w-100 px-2">Check Availability</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>
<!-- //w3l-availability-form-section -->

<!-- about -->
<section class="best-rooms py-5">
    <div class="container py-sm-4">
        <div class="row">
        @foreach($addroom as $room)
            <div class="col-lg-6 about-left mb-md-0 mb-5">
                <h3 class="title-big">Relax in our Hotel</h3>
                <h5>We make the best for all our customers.</h5>
                <p class="mt-3">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo. Mauris hendrerit vel
                    ex.
                    Quisque vitae luctus massa. Phasellus sed aliquam leo. Vestibulum ullamcorper a massa eu fringilla.
                    Integer ultrices finibus sed nisi. in convallis felis dapibus sit amet. Lorem ipsum dolor, sit
                    amet consectetur adipisicing elit. Totam, porro! Lorem ipsum dolor sit amet.</p>
                <a href="{{route('about')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Learn About Us</a>
            </div>
            <div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
                <img src="{{url('/uploads/'. $survic->imaje)}}" alt="" class="img-fluid img-border mt-4" />
                <img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-3 pb-lg-5">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">

                        <div class="row">
                            @foreach($facility as $survic)
                            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                                <div class="features-with-17-right-tp_sur">
                                    <div class="features-with-17-left2">
                                        <img src="{{url('/uploads/'. $survic->imaje)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about -->


<!-- <div class="best-rooms py-5">
   
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        
        <div class="ban-content-inf row py-lg-3">
        @foreach($addroom as $room)
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="{{route('catagory-under-room',$room->id)}}" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">Luxury Hotel</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Double bed</li>
                            <li><span class="fa fa-bed"></span> 15sqft</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{route('catagory-under-room',$room->id)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Family Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{route('catagory-under-room',$room->id)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Double Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{route('catagory-under-room',$room->id)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Luxury Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{route('catagory-under-room',$room->id)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Resort Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
      
    </div>
    
</div> -->
<!-- <div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms </h3>
        <div class="ban-content-inf row py-lg-3">
        @foreach($addroom as $room)


            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="{{url('uploads/'.$room->imaje)}}" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        
                        <a href="" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>



        @endforeach

            
        </div>
    </div>
</div> -->

<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center"> Rooms Catagory</h3>
        
        <div class="ban-content-inf row py-lg-3">
        @foreach($addroom as $room)
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="{{url('/uploads/'.$room->imaje)}}" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">{{$room->catagory_title}}</a></h3>
                        <ul class="mb-3">
                            </span>{{$room->room_description}}</li>
                            </span>price# {{$room->price}}</li>
                            
                           

                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="{{route('catagory-under-room',$room->id)}}" 
                             class="btn btn-style btn-primary mt-sm-4 mt-3">view room</a>
                    </div>
                   
                </div>
            </div>
         
            @endforeach
        </div>
         
        
    </div>
</div>

<section class="w3l-index3">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="assets/images/videobg.jpg" alt="" class="img-fluid" />
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/246941769" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                    <h6>Discover our Locations</h6>
                    <h3 class="title-big">20 Years of Hotels and Resort Experience</h3>
                    <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel.</p>
                    <ul class="w3l-right-book mt-4">
                        <li><span class="fa fa-check" aria-hidden="true"></span>We make the best for all our customers</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Follow our Resort Luxury Hotels</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Luxury hotels and best resorts</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Double rooms and family rooms</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Enjoy a luxury experience</li>
                    </ul>
                    <a href="about.html" class="btn btn-style btn-primary mt-4">Check all packages</a>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
