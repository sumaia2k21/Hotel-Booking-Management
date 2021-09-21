@extends('frontend.index')
@section('content')


<body>

<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Rooms</h2>
            <p><a href="index.html">Home</a> &nbsp; / &nbsp; rooms</p>

        </div>
    </div>
</section>
<section class="w3l-roomsingleblock1 py-5">

    <div class="best-rooms w3l-blog py-5">
    
        <div class="container py-lg-5 py-sm-4">
        
            <div class="ban-content-inf row">
            @foreach($catagory_room_view->rooms as $data)
                <div class="maghny-gd-1 col-lg-4 col-md-6">
                
                    <div class="maghny-grid">
                        <a href="{{route('single.room.view',$data->id)}}">
                        <figure class="effect-lily">
                            <img class="img-fluid" src="{{url('uploads/'.$data->imaje)}}" alt="">
                            <figcaption>
                                <div>
                                    <h4 class="top-text">Luxury Hotel room
                                        <ul>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star"></span></li>
                                            <li> <span class="fa fa-star-o"></span></li>
                                        </ul>
                                    </h4>
                                    <p>Book for 20$ </p>
                                </div>
                            </figcaption>
                        </figure>
                        
                        <div class="room-info">
                            
                            <h3 class="room-title">{{$data->catagory->catagory_title}}</a></h3>
                           
                            <ul class="mb-3">
                                <li><span class="fa fa-users"></span>{{$data->max_adult}}</li>
                                <li><span class="fa fa-bed"></span> {{$data->no_of_bed}}</li>
                                <li><span class="fa fa-bed"></span>  {{$data->room_number}}</li>
                                
                            </ul>
                            

                            <h4>{{$data->room_description}}</h4>
                            <a href="{{route('bookingform',$data->id)}}" class="btn mt-sm-4 mt-3">Book Now</a>
                            <div class="room-info-bottom">
                                <ul class="room-amenities">
                                    <li><a href="#url"><span class="fa fa-bed" title="Beds"></span></a></li>
                                    <li><a href="#url"><span class="fa fa-television" title="Television"></span></a>
                                    </li>
                                    <li><a href="#url"><span class="fa fa-bath" title="Private Bathroom"></span></a>
                                    </li>
                                    <li><a href="#url"><span class="fa fa-motorcycle" title="Bike Rental"></span></a>
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
     
</section>



</body>


@endsection
