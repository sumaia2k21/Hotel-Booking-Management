@extends('backend.master')
@section('content')
<div>
    <h4 class=" title-lg text-center">Booking Report /Search result for booking room</h4>
</div>
<div id="printableArea">
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
        <br>
        <h5 class=" title-lg text-center">Search result from {{$from_date}} to {{$to_date}}</h5>

    
            <div class="card">
                <table class="table table-bordered">
                    <thead>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile_no</th>
                        <th scope="col">Email</th>
                        <th scope="col">address</th>
                        <th scope="col">From_date</th>
                        <th scope="col">To_date</th>
                        <th scope="col">status</th>

                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $list)
                        <tr>
                            <td>{{$list->id}}</td>
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
