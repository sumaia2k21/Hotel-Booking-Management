@extends('frontend.index')
@section('content')


<div id="printableArea">

    <br>
    <h4>{{$hotels->name}} hotel</h4>
    <br>
    <div>
            <ul>
                <h6 class="footer-title-29">Address</h6>
                <p> {{$hotels->address}}</p>
          </ul>
    </div>

     <div style="text-align: right;" >
          <h6 class="footer-title-29" >Contact us</h6>
          <ul>
            <li><a href=""><span class="fa fa-phone"></span> {{$hotels->contact_no}}</a></li>
            <li><a href=""><span class="fa fa-phone"></span> {{$hotels->email}}</a></li> 
          </ul>
        </div>
    
    <h1 style="text-align: center;">invoice</h1>
    <br>

    <div class="card">

      <h5 style="text-align: center;"> User details</h5> 
        <table class="table table-bordered">
            <thead>
                <!-- <th scope="col">S.No</th> -->
                <th scope="col">User Name</th>
                <th scope="col">Mobile_no</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>


            </thead>
            <tbody>
                @foreach($bookstatus as $list)
                <tr>
                    <!-- <td>{{$loop->iteration}}</td> -->
                    <td>{{$list->name}}</td>
                    <td>{{$list->mobile_no}}</td>
                    <td>{{$list->email}}</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h5 style="text-align: center;"> booking details</h5> 
        
        <table class="table table-bordered">
            <thead>
             
                <th scope="col">Booking number</th>
                <th scope="col">From date</th>
                <th scope="col">to date</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </thead>
            <tbody>
                @foreach($bookstatus as $list)
                <tr>
                    
                    <td>{{$list->id}}</td>
                    <td>{{$list->from_date}}</td>
                    <td>{{$list->to_date}}</td>
                    <td>{{$list->status}}</td>
                    <td><img src="{{url('uploads/'.$list->image)}}" alt=""></td>
                    <td></td>
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
                @foreach($bookstatus as $list)
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
<br>
<br>
<br>


@endsection
