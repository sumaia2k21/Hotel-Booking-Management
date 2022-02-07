@extends('backend.master')
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
                <h1 style="text-align: center;">Money reciept</h1>
                <hr>
                <div class="card">
                <div class="col-md-6">
                    @foreach($payment as $list)
                    <h5> User details</h5>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>User name</strong></th>
                                    <td>{{$list->book->name}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Mobile_no</strong></th>
                                    <td>{{$list->book->mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>email</strong></th>
                                    <td>{{$list->book->email}}</td>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>

                <br>
              
                
                    
                
                   
                 
                    <div class="col-md-6">
                    @foreach($payment as $pays)
                    <h5>Booking Details</h5>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <!-- <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Total Amount:</strong></th>
                                    <td><del>{{$pays->book->total_ammount}}</del> /=</td>
                                </tr> -->
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Booking number:</strong></th>
                                    <td>{{$list->book->id}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>From date:</strong></th>
                                    <td>{{$list->book->from_date}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>to_date:</strong></th>
                                    <td>{{$list->book->to_date}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>price:</strong></th>
                                    <td>{{$list->book->discount_price}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Status:</strong></th>
                                    <td>{{$list->book->status}}</td>
                                </tr>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                
                </div>

                
                <br>
                <div class="col-md-6">
                    @foreach($payment as $pays)
                    <h5>Payment details</h5>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <!-- <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Total Amount:</strong></th>
                                    <td><del>{{$pays->book->total_ammount}}</del> /=</td>
                                </tr> -->
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Discount Price:</strong></th>
                                    <td>{{$pays->discount_price}} /=</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Total paid:</strong></th>
                                    <td>{{$pays->book->total_paid}} /=</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong> Status:</strong></th>
                                    <td>{{$pays->payment_status}} /=</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Due:</strong></th>
                                    <td>{{$pays->due}} /=</td>
                                </tr>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>

                </div>
            </div>
        </div>
        <button class="btn btn-danger" onclick="printDiv('printableArea')">
    <i class="bi bi-printer"></i> Print</button>
    </div>
    </div>
    </div>
</section>

<!-- Button trigger modal -->

<button class="btn btn-succees">Print</button>
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
