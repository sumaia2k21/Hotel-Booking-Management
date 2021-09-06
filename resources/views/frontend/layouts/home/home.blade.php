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
<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main py-5">
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
    </div>
</section>
<!-- //w3l-availability-form-section -->

<!-- about -->
<section class="w3l-about py-5">
    <div class="container py-sm-4">
        <div class="row">
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
                <img src="/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
                <img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
            </div>
        </div>
    </div>
</section>
<!-- //about -->
<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        <div class="ban-content-inf row py-lg-3">
            @foreach($addroom as $room)
            <div class="maghny-gd-1 col-lg-6">


                <div class="maghny-grid">

                    <figure class="effect-lily">
                        <!-- <img class="img-fluid" src="assets/images/room1.jpg" alt=""> -->
                        <img src="{{url('/uploads/'. $room->imaje)}}" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>


                    <div class="room-info">


                        <h3 class="room-title"><a href="room-single.html">
                                {{$room->catagory->catagory_title}}
                            </a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> {{$room->max_adult}}</li>
                            <li><span class="fa fa-users"></span> {{$room->max_child}}</li>
                            <li><span class="fa fa-bed"></span> {{$room->no_of_bed}}</li>
                            <li><span class="fa fa-bed"></span> {{$room->Price}}</li>
                        </ul>
                        <h5>{{$room->room_description}}</h5>
                        <a href="{{route('room')}}" class="btn btn-style btn-primary mt-sm-4 mt-3">More...</a> 
                    </div>
                </div>
            </div>
            @endforeach
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="" alt="" />
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
                                <img class="img-fluid" src="" alt="" />
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
                                <img class="img-fluid" src="" alt="" />
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
                                <img class="img-fluid" src="" alt="" />
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
</div>


@include('frontend.partials.footer')

@endsection
