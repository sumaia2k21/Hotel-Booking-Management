@extends('frontend.index')
@section('content')




    <section class="w3l-booking-top">
        <!-- /form-16-section -->
        <div class="booking-form-61">
            <div class="container">
                <div class="booking-top-gds">
                    <div class="booking-forms-16-info align-self">
                        <h5>Your Reservation</h5>
                        <h3 class="title-big">Select the Room, check for availability and book it.</h3>
                        <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur
                            adipisicing elit Ea consequuntur illum.</p>
                    </div>
                    <div class="form-right-inf">
                        <div class="booking-form-content">
                            <div>
                            @if(session()->has('message'))
                            <span class="alert alert-success">
                                {{ session()->get('message') }}
                            </span>
                            @endif
                            </div>
                           
                            <h2>Book Your Room</h2>
                            
                            <br>
                            <br>
                            <form action="{{route('cart.checkout')}}" method="POST">
                               @csrf
                                <div class="twice">
                                  
                                    <input type="text"value="{{$bookingform->name}}" name="name" id="firstName" placeholder="Full Name"
                                         class="form-control" required>
                                </div>
                              
                                <div class="twice">
                                    <input type="number" name="mobile_no" value="{{$bookingform->mobile}}" id="firstName" placeholder="Mobile_no"
                                         class="form-control" required>
                                </div>
                                <div class="twice">

                                    <input type="email"  value="{{$bookingform->email}}" name="email" id="email"  placeholder="Email"
                                       class="form-control" required>
                                </div>
                                <div class="twice">
                                    <textarea type="text" name="address" required id="address" placeholder="Address"
                                        class="form-control"></textarea>
                                </div>
                                <div class="twice">
                                    <label>From date</label>
                                    <input value="{{$value[1]}}" readonly type=""  id="date1"  class="form-control" name="from_date"
                                        placeholder="Date" required="" />
                                </div>
                                <div class="twice">
                                    <label>To date</label>
                                    <input value="{{$value[3]}}" readonly type="" id="date2"  class="form-control" name="to_date"
                                        placeholder="Date" required=""/>
                                </div>

                                @php
                                $to_date=$value[3];
                                $from_date=$value[1];
                                $date1=date_create($from_date);
                                $date2=date_create($to_date);
                                $diff_in_days=date_diff($date1,$date2);
                                $days=$diff_in_days->days;
                               
                                
                                @endphp

                    
                               
                                <br>
                                <div class="twice">
                                    <button type="submit" class="btn btn-primary "> send </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    var today = new Date().toISOString().split('T')[0];
document.getElementById("date1").setAttribute('min', today);

// alert("min Data " + today)
</script>
<script>
    var today = new Date().toISOString().split('T')[0];
document.getElementById("date2").setAttribute('min', today);

// alert("min Data " + today)
</script>
  

    @endsection
