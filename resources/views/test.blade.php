@extends('frontend.index')
@section('content')



{{-- @dd($request) --}}
    <section class="w3l-roomsingleblock1 py-5">
        <div class="best-rooms w3l-blog py-5">
        <h2 class=" title-lg text-center">Search Result</h2>
      
        <h5 class=" title-lg text-center">Search result from {{$from_date}} to {{$to_date}}</h5>
            <div class="container py-lg-5 py-sm-4">
             <div class="ban-content-inf row">
                    @foreach($available as $data)
                    <div class="maghny-gd-1 col-lg-4 col-md-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily">
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
                                        <p>Book for {{$data->Price}} </p>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="room-info">
                                <h3 class="room-title"><a href="#url">{{$data->catagory->catagory_title}} </a></h3>
                                <ul class="mb-3">
                                <li>Max_adult:  {{$data->max_adult}}</li>
                                <li>  No_of_bed:  {{$data->no_of_bed}}</li>
                                <li> Room_number : {{$data->room_number}} </li>
                                <li> Price : {{$data->price}} </li>
                                <li> room_description : {{$data->room_description}} </li>
                            
                                    <!-- <li><span class="fa fa-users"></span>{{$data->max_adult}}</li>
                                    <li><span class="fa fa-bed"></span> {{$data->no_of_bed}}</li>
                                    <li><span class="fa fa-bed"></span>{{$data->room_number}} </li>
                                    <li><span class="fa fa-bed"></span>{{$data->price}} </li> -->

                                </ul>
                                <h4></h4>
                                <a href="{{route('bookingform',$data->id)}}" class="btn mt-sm-4 mt-3">Book Now</a>
                                <div class="room-info-bottom">
                                    <ul class="room-amenities">
                                        <li><a href="#url"><span class="fa fa-bed" title="Beds"></span></a></li>
                                        <li><a href="#url"><span class="fa fa-television" title="Television"></span></a>
                                        </li>
                                        <li><a href="#url"><span class="fa fa-bath" title="Private Bathroom"></span></a>
                                        </li>
                                        <li><a href="#url"><span class="fa fa-motorcycle"
                                                    title="Bike Rental"></span></a>
                                        </li>
                                    </ul>
                                    <a href="{{route('single.room.view',$data->id)}}" class="btn view">Full Info →</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                   
                   
                </div>
            </div>
        </div>
        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5 mb-0">
                <li class="page-item disabled">
                    <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
                <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
                <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
                <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
            </ul>
        </nav> -->
    </section>


@endsection