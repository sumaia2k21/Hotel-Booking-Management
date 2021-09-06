@extends('frontend.index')
@section('content')

<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        <div class="ban-content-inf row py-lg-3">
        @foreach($catagory_room_view as $data)


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
                        <h3 class="room-title"><a href="room-single.html"></a>{{$data->catagory->catagory_title}}</h3>
                        <h1>{{$data->room_number}}</h1>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> {{$data->max_adult}} </li>
                            
                            <li><span class="fa fa-bed"></span> {{$data->Price}}</li>
                            <li><span class="fa fa-bed"></span> {{$data->no_of_bed}}</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>



        @endforeach

            
        </div>
    </div>
</div>

@endsection