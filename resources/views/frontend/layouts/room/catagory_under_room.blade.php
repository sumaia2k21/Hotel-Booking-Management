@extends('frontend.index')
@section('content')




<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Rooms</h2>
            <p><a href="index.html">Home</a> &nbsp; / &nbsp; rooms</p>

        </div>
    </div>
</section>
<!--Section: Block Content-->
<section class="w3l-roomsingleblock1 py-5">
    <div class="best-rooms w3l-blog py-5">
        <div class="container py-lg-5 py-sm-4">
            @foreach($catagory_room_view->rooms as $data)
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

                            <!-- <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item">
                                            <img src="{{url('uploads/'.$data->image1)}}"
                                            class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

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
                                <td>{{$data->price}} tk</td>
                                </tr>
                                <tr>
                                <th class="pl-0 w-25" scope="row"><strong>discount</strong></th>
                                <td>{{$data->discount}} tk</td>
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
<!--Section: Block Content-->
<script>

</script>


@endsection
