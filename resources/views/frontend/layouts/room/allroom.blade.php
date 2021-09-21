@extends('frontend.index')
@section('content')




<body>
    <!-- //w3l-header -->
    <section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">

                <h2>Rooms</h2>
                <p><a href="index.html">Home</a> &nbsp; / &nbsp;all rooms</p>

            </div>
        </div>
    </section>
    <section class="w3l-roomsingleblock1 py-5">
        <div class="best-rooms w3l-blog py-5">
            <div class="container py-lg-5 py-sm-4">
                <div class="ban-content-inf row">
                    @foreach($room as $data)
                    <div class="maghny-gd-1 col-lg-4 col-md-6">
                        
                        <div class="maghny-grid">
                            <figure class="effect-lily">
                            <a href="{{route('single.room.view',$data->id)}}">
                                <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="">
                                <figcaption>
                                    <div>
                                        <h4 class="top-text">{{$data->catagory->catagory_title}}  Hotel room
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
            {{$room->links('pagination::bootstrap-4')}} 
        </div>
        
       
    </section>
</body>

@endsection
