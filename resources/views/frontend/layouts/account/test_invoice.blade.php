@extends('frontend.index')
@section('content')
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">

            <div id="printableArea">

                <br>
                <h4>{{$hotels->name}} </h4>
                <br>
                <div>
                    <ul>
                        <h6 class="footer-title-29">Address</h6>
                        <p> {{$hotels->address}}</p>
                    </ul>
                </div>

                <div style="text-align: right;">
                    <h6 class="footer-title-29">Contact us</h6>
                    <ul>
                        <li><a href=""><span class="fa fa-phone"></span> {{$hotels->contact_no}}</a></li>
                        <a href=""><span class="fa fa-phone"></span> {{$hotels->email}}</a>
                    </ul>
                </div>
                <h1 style="text-align: center;">Invoice</h1>
                <hr>
                <div class="col-md-6">
                    @foreach($user as $list)
                    <h5> User details</h5>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>User name</strong></th>
                                    <td>{{$list->name}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Mobile_no</strong></th>
                                    <td>{{$list->mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>email</strong></th>
                                    <td>{{$list->email}}</td>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>

                <br>

                <div class="card">
                    <h5 style="text-align: center;"> booking details</h5>

                    <table class="table table-bordered">
                        <thead>

                            <th scope="col">Booking number</th>
                            <th scope="col">From date</th>
                            <th scope="col">to date</th>
                            <th scope="col">Total Ammount</th>
                            <th scope="col">Status</th>
                            
                            <th scope="col"></th>

                        </thead>
                        <tbody>

                            @php 
                                $total = 0; 
                            @endphp
                            @foreach($bookinginfo as $list)
                            <tr>

                                <td>{{$list->id}}</td>
                                <td>{{$list->from_date}}</td>
                                <td>{{$list->to_date}}</td>
                                <td>{{$list->discount_price}}</td>
                                <td>{{$list->status}}</td>
                                <td><img src="{{url('uploads/'.$list->image)}}" alt=""></td>
                                <td></td>

                                @php
                                $roomPrice = $list->discount_price;
                                $total = $roomPrice + $total;
                                @endphp
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h5 style="text-align: center;"> Room information</h5>
                    <table class="table table-bordered">
                        <thead>

                            <!-- <th scope="col">room Type or category</th> -->
                            <th scope="col">Room number</th>
                            <th scope="col">Room name</th>
                            <th scope="col">max_adult</th>
                            <th scope="col">max_child</th>
                            <th scope="col">no_of_bed</th>
                            <th scope="col">image</th>

                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookinginfo as $list)
                            <tr>

                                <!-- <td>{{$list->catagory_title}}</td> -->
                                <td>{{$list->room->room_number}}</td>
                                <td>{{$list->room->room_name}}</td>
                                <td>{{$list->room->max_adult}}</td>
                                <td>{{$list->room->max_child }}</td>
                                <td>{{$list->room->no_of_bed}}</td>

                                <td><img src="{{url('/uploads/'.$list->room->image)}}" width="40px" alt="image"></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
            </div>
            <br>
            <br>

            <h5> Payment information</h5>
            <hr>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>sub total</strong></th>
                                    <td>qq</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Total </strong></th>
                                    <td>{{$list->mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>qqq</strong></th>
                                    <td>{{$list->email}}</td>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                </div>
        </div>
    </div>
    </div>
</section>

<!-- Button trigger modal -->
<button class="btn btn-primary" onclick="printDiv('printableArea')">
    <i class="bi bi-printer"></i> Print
</button>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>
<br>
<br>
<br>

@endsection
