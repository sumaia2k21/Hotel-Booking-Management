@extends('frontend.index')
@section('content')


<!--w3l-header-->

<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Our Services</h2>
            <p><a href="index.html">Home</a> &nbsp; / &nbsp; Services</p>

        </div>
    </div>
</section>
<!--  services section -->
<section class="w3l-servicesblock1" id="service">
    <div class="features-with-17_sur py-5">
    <h2 style="text-align: center;">Services</h2>
        <div class="container py-lg-5 py-sm-4">
            <div class="features-with-17-top_sur">
                <div class="row">
                  
                    <!-- <div class="col-lg-4 col-md-6 align-self">
                        <h3 class="title-small">Luxury Hotel Services</h3>
                        <p>Our rooms are beautifully designed and comfortable and can accommodate various groups of
                            travelers. All rooms have private bathrooms, a flat-screen TV and a safe.</p>
                    </div> -->
                    @foreach($facility as $survic)
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left2">
                              <h6 st><a href="#url">{{$survic->facility_title}}</a></h6>
                                <div>
                                    <hr>
                                <img src="{{url('/uploads/'. $survic->imaje)}}" style="width: 200px;" alt="">
                                </div>
                                
                                <p>Our rooms are beautifully designed and comfortable and can accommodate various groups of
                            travelers. All rooms have private bathrooms.</p>
                    
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#exampleModal">
                                    Details
                                </button> -->
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>


            </div>


        </div>

    </div>
</section>
<!-- <section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row align-items-center">
                <div class="col-md-6 title">
                    <h3 class="title-big">Our Hotel Facilities</h3>
                    <img src="assets/images/facilities.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 main-cont-wthree-fea text-center">
                    <div class="row">
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-television"></span>
                                <h3 class="title-spe">Tv</h3>
                                <p> Satellite</p>
                            </div>
                        </div>
                        <div class="col-6 pl-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-motorcycle"></span>
                                <h3 class="title-spe">Bike</h3>
                                <p>Rental</p>
                            </div>
                        </div>
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-cutlery"></span>
                                <h3 class="title-spe">Food</h3>
                                <p>Included</p>
                            </div>
                        </div>
                        <div class="col-6 pl-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-bed"></span>
                                <h3 class="title-spe">Bed</h3>
                                <p>King size</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row align-items-center">
                <div class="col-md-6 title">
                    <h3 class="title-big">Our Hotel Facilities</h3>
                    <img src="assets/images/facilities.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 main-cont-wthree-fea text-center">
                    <div class="row">
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-television"></span>
                                <h3 class="title-spe">Tv</h3>
                                <p> Satellite</p>
                            </div>
                        </div>
                        <div class="col-6 pl-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-motorcycle"></span>
                                <h3 class="title-spe">Bike</h3>
                                <p>Rental</p>
                            </div>
                        </div>
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-cutlery"></span>
                                <h3 class="title-spe">housekeeping</h3>
                                <p>Included</p>
                            </div>
                        </div>
                        <div class="col-6 pl-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-bed"></span>
                                <h3 class="title-spe">Bed</h3>
                                <p>King size</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <a href="{{route('home')}}" class="back"> <span class="fa fa-long-arrow-left"></span> Back to  Home</a>
        </div>
    </div>
</section>




@endsection
