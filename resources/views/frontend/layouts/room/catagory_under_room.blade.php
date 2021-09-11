@extends('frontend.index')
@section('content')

<!-- <div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms </h3>
        <div class="ban-content-inf row py-lg-3">
        @foreach($catagory_room_view->rooms as $data)


            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html"></a>{{$data->catagory->catagory_title}}</h3>
                        <li>Room no # {{$data->room_number}}</li>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> Max-User#{{$data->max_adult}} </li>
                            
                            <li>Price# </span> {{$data->Price}}</li>
                            <li><span class="fa fa-bed"></span> {{$data->no_of_bed}}</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="{{route('bookingform',$data->id)}}" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>



        @endforeach

            
        </div>
    </div>
</div> -->

<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        @foreach($catagory_room_view->rooms as $data)
    
            <div class="ban-content-inf row py-lg-3">

                <div class="maghny-gd-1 col-lg-6">

                    <div class="maghny-grid">
                        <figure class="effect-lily">
                        <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4 class="top-text">Luxury Hotel and Best Resort
                                        <span>Peaceful Place to stay</span></h4>
                                    <p>From 20$ </p>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="room-info">
                            <h3>{{$data->catagory->catagory_title}} </h3>
                            <hr>
                            <ul class="mb-3">
                            <li> Room No# {{$data->room_number}}</li>
                                <li> max_adult#{{$data->max_adult}}</li>
                                <li>no_of_bed# {{$data->no_of_bed}}</li>
                                <li>room_description# {{$data->room_description}}</li>
                                <li>Price# {{$data->Price}}</li>
                            </ul>
                           
                            <a href="{{route('bookingform',$data->id)}}" class="btn btn-style btn-primary mt-sm-4 mt-3">Book now</a>
                        </div>
                    </div>
                </div>

                <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="maghny-gd-1 col-6">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="" />
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
                                    <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="" />
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
                                    <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="" />
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
                                    <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="" />
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
</div>

@endsection