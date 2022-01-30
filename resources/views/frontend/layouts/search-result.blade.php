@extends('frontend.index')
@section('content')



<!-- {{-- @dd($request) --}} -->

<section class="w3l-roomsingleblock1 py-5">
    <div class="best-rooms w3l-blog py-5">
        <h5 class=" title-lg text-center">Search result from {{$from_date}} to {{$to_date}}</h5>
        <div class="container py-lg-5 py-sm-4">
            @foreach($available as $data)
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="mdb-lightbox">
                        <div class="row product-gallery mx-1">
                            <div class="col-12 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img">
                                    <img src="{{url('uploads/'.$data->image)}}" class="img-fluid z-depth-1"
                                        width="450px">
                                </figure>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>{{$data->catagory->catagory_title}}</h3>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Room_number</strong></th>
                                    <td>{{$data->room_number}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Max_adult</strong></th>
                                    <td>{{$data->max_adult}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Max_child</strong></th>
                                    <td>{{$data->max_child}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>No_of_bed</strong></th>
                                    <td>{{$data->no_of_bed}}</td>
                                </tr>
                                <th class="pl-0 w-25" scope="row"><strong>price</strong></th>
                                <td>{{$data->price}} TK</td>
                                </tr>
                                <tr>
                                <th class="pl-0 w-25" scope="row"><strong>discount</strong></th>
                                <td>{{$data->discount}} %</td>
                                </tr>
                                <tr>
                                <th class="pl-0 w-25" scope="row"><strong>discount</strong></th>
                                <td><del>{{$data->price}} TK</del>     {{$data->discount_price}} TK</td>
                                </tr>
                               
                               
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <a href="{{route('bookingform',$data->id)}}" type="button"
                        class="btn btn-primary btn-md mr-1 mb-2">book now</a>
                    <a href="{{route('single.room.view',$data->id)}}" type="button"
                        class="btn btn-primary btn-md mr-1 mb-2">Full info-></a>
                    <!-- <button type="button" class="btn btn-light btn-md mr-1 mb-2"><iclass="fas fa-shopping-cart pr-2"></i>Add to cart</button> -->
                </div>
            </div>
            <br>
            <br>
            <br>
            @endforeach
</section>

@endsection
