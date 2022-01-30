@extends('backend.master')
@section('content')


<br>

<div id="printableArea">

<div>

    <h1>
    <!-- <img src="{{url('/uploads/'. $hotels->logo)}}" alt="Your logo" style="height:35px;" />  -->
 {{$hotels->name}}
</h1>
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

    
</div>
<h2 style="text-align: center;">  booking  reports</h2>
<hr> 
<div class="card">
    <table class="table table-bordered">
        <thead>
            <th scope="col">S.No</th>
            
            <th scope="col">Room name</th>
            <th scope="col">Room number</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile_no</th>
            <th scope="col">Email</th>
            <th scope="col">address</th>
            <th scope="col">from_date</th>
            <th scope="col">to_date</th>
            <th scope="col">Status</th>
            
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($request as $list)
            <tr>
                <td>{{$list->id}}</td>
                <!-- <td>Booking Number</td> -->
                <td>{{$list->room->room_name}}</td>
                <td>{{$list->room->room_number}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->mobile_no}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->from_date}}</td>
                <td>{{$list->to_date}}</td>
                <td>{{$list->status}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
<div>
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


@endsection
