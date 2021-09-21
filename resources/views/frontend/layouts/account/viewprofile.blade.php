@extends('frontend.index')
@section('content')

<body>

    <section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <!-- <h2>View your profile</h2> -->
                <p><a href="">View your profile</a> &nbsp; / &nbsp; profile</p>

            </div>
        </div>
    </section>
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5">
        <div class="contacts-9 py-lg-5 py-sm-4">
            <div class="container">

                <div class="d-grid contact-view">
                <!-- <div class="cont-details">
                        image show 
                    </div> -->
                    <div class="map-content-9 mt-lg-0 mt-4">
                        @if(session()->has('message'))
                        <span class="alert alert-success">
                            {{ session()->get('message') }}
                        </span>
                        @endif
                        <h2>View your profile/<small>profile</small></h2>
                        <form action="" method="post">
                            @csrf
                            <div class="twice">
                                <input type="text" class="form-control" name="name" value="{{$profile->name}}" id="w3lName" placeholder="Name"
                                    required="">
                            </div>
                            <div class="twice">
                                <input type="email" class="form-control" name="email" value="{{$profile->email}}" id="w3lSender" placeholder="Email"
                                    required="">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="mobile_no" value="{{$profile->mobile}}" id="w3lName"
                                    placeholder="Mobile No" required="">
                            </div>

                            <div class="twice">

                                <input type="date" class="form-control" name="reg_date" id="w3lSubject"
                                    placeholder="Registration Date" required="">
                            </div>


                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact1 -->



    @endsection
