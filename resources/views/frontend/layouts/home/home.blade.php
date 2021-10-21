@extends('frontend.index')
@section('content')
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <!-- /w3l-availability-form-section -->
                        <div class="card">
                            <div class="container pt-lg-3 pb-lg-5">
                                <div class="forms-top">
                                    <div class="form-right">
                                        <div class="form-inner-cont">
                                            <h3 class="title-small">Check Availability</h3>
                                            <form action="{{route('search')}}" method="get">
                                                <div class="row book-form">
                                                    <div class="form-input col-md-4 col-sm-6 mt-3">
                                                        <label>From Date</label>
                                                        <input type="date" name="from_date" placeholder="Date"
                                                            value="{{ date('m-d-Y') }}" min="{{ date('m-d-Y')}}"
                                                            required="">
                                                    </div>
                                                    <div class="form-input col-md-4 col-sm-6 mt-3">
                                                        <label>To Date</label>
                                                        <input type="date" name="to_date" placeholder="Date"
                                                            value="{{ date('m-d-Y') }}" min="{{ date('m-d-Y') }}"
                                                            required="">

                                                    </div>
                                                    <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                                                        <button type="submit"
                                                            class="btn btn-style btn-primary w-100 px-2">Check
                                                            Availability</button>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Location is heavenly. Best to visit in week days to enjoy the peaceful beauty
                                    </h5>
                                    <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{route('survice')}}">
                                        Our
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
<!-- /w3l-availability-form-section -->

<!-- <div class="card">
    <div class="container pt-lg-3 pb-lg-5">
        <div class="forms-top">
            <div class="form-right">
                <div class="form-inner-cont">
                    <h3 class="title-small">Check Availability</h3>
                    <form action="{{route('search')}}" method="get">
                        <div class="row book-form">
                            <div class="form-input col-md-4 col-sm-6 mt-3">
                                <label>From Date</label>
                                <input type="date" name="from_date" placeholder="Date" required="">
                            </div>
                            <div class="form-input col-md-4 col-sm-6 mt-3">
                                <label>To Date</label>
                                <input type="date" name="to_date" placeholder="Date" required="">
                            </div>

                            <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                                <button type="submit" class="btn btn-style btn-primary w-100 px-2">Check
                                    Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
                <img src="{{url('/uploads/'. $room->image)}}" alt="" class="img-fluid img-border mt-4" />
                <img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="w3l-availability-form" id="booking">
        <div class="row">
            @foreach($roomimages as $images)
            <div class="col-md-3">
                 <img src="{{url('/uploads/'. $images->image)}}" alt="Lights" style="width:100%">   
            </div>
            @endforeach
        </div>
        
 
</section>

<!-- //about -->
<!-- <div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        @foreach($addroom as $data)

        <div class="ban-content-inf row py-lg-3">

            <div class="maghny-gd-1 col-lg-6">

                <a href="{{route('room')}}">
                    <div class="maghny-grid">
                        <figure class="effect-lily">
                            <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4 class="top-text">Luxury Hotel and Best Resort
                                        <span>Peaceful Place to stay</span></h4>
                                    <p>From 20$ </p>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="room-info">
                            <h3>{{$data->catagory->catagory_title}}</h3>
                </a>
                <hr>
                <ul class="mb-3">
                    <li> Room No# {{$data->room_number}}</li>
                    <li> max_adult#{{$data->max_adult}}</li>
                    <li>no_of_bed# {{$data->no_of_bed}}</li>
                    <li>room_description# {{$data->room_description}}</li>
                    <li>Price# {{$data->Price}}</li>
                </ul>

                <a href="{{route('bookingform',$data->id)}}" class="btn btn-info">Book
                    now</a>
                <a href="{{route('all.room.view')}}" class="btn btn-info">Info</a>
            </div>
        </div>
    </div>
    <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
        <div class="row">
            <div class="maghny-gd-1 col-6">
                <div class="maghny-grid">
                    <figure class="effect-lily border-radius">
                        <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
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
                        <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
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
                        <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
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
                        <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
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
@endforeach
</div>
</div> -->


<!-- new room -->

<div class="best-rooms w3l-blog py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="ban-content-inf row">
            @foreach($addroom as $data)
            <div class="maghny-gd-1 col-lg-4 col-md-6">

                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <a href="{{route('single.room.view',$data->id)}}">
                            <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="">
                            <figcaption>
                                <div>
                                    <h4 class="top-text">{{$data->catagory->catagory_title}} Hotel room
                                        <ul>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star-o"></span></li>
                                        </ul>
                                    </h4>
                                    <p>{{$data->Price}}</p>
                                </div>
                            </figcaption>
                        </a>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="#url">{{$data->catagory->catagory_title}} </a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span>{{$data->max_adult}}</li>
                            <li><span class="fa fa-bed"></span> {{$data->no_of_bed}}</li>
                            <li><span class="fa fa-bed"></span>{{$data->room_number}} </li>

                        </ul>
                        <h4></h4>

                        <div class="room-info-bottom">
                            <a href="{{route('bookingform',$data->id)}}" class="btn view">Book Now</a>
                            <a href="{{route('single.room.view',$data->id)}}" class="btn view">Full Info →</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
                                <!-- <figcaption>
                                    <div>
                                        <h4>Family Rooms <span> Resort</span></h4>

                                    </div>

                                </figcaption> -->
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
                                <!-- <figcaption>
                                    <div>
                                        <h4>Double Rooms <span> Resort</span></h4>

                                    </div>

                                </figcaption> -->
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
                                <!-- <figcaption>
                                    <div>
                                        <h4>Luxury Rooms <span> Resort</span></h4>

                                    </div>

                                </figcaption> -->
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="" />
                                <!-- <figcaption>
                                    <div>
                                        <h4>Resort Rooms <span> Resort</span></h4>

                                    </div>

                                </figcaption> -->
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

    </div>

</div>




@endsection
