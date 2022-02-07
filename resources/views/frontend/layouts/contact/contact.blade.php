
@extends('frontend.index')
@section('content')




    <section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Contact Us</h2>
                <p><a href="index.html">Home</a> &nbsp; / &nbsp; Contact</p>

            </div>
        </div>
    </section>
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5">
        <div class="contacts-9 py-lg-5 py-sm-4">
            <div class="container">
              
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p><a href="tel:+44 99 555 42"> {{$hotels->contact_no}}</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p><a href=""  class="mail"> {{$hotels->email}}</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Address</h6>
                            <p>{{$hotels->address}}</p>
                        </div>
                       
                    </div>
                    
                </div>
                
                <div class="map-content-9 mt-lg-0 mt-4">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <form action="{{route('readenquiry')}}" method="post">
                        @csrf
                        <div class="twice-two">
                            <input type="text" class="form-control" value="{{$contact->name}}" readonly name="name" id="w3lName" placeholder="Name"
                                required="">
                               
                            <input type="email" class="form-control" value="{{$contact->name}}" readonly name="email"  id="w3lSender" placeholder="Email"
                                required="">
                        </div>
                        <!-- <div class="twice">
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                        </div> -->
                        <div class="twice">
                            <input type="number" class="form-control" value="{{$contact->mobile}}" readonly name="mobile_no"  id="w3lName"
                                placeholder="Mobile No" required="">
                        </div>
                        <textarea name="message" class="form-control" id="w3lMessage" placeholder="Message"
                            required="">Message</textarea>
                        <button type="submit" class="btn btn-contact">Send Message</button>
                    </form>
                </div>
            </div>
            <a href="{{route('home')}}" class="back"> <span class="fa fa-long-arrow-left"></span> Back to  Home</a>
        </div>
        </div>
        
    </section>
    <!-- /contact1 -->
   


    @endsection
