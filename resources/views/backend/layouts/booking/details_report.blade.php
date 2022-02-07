@extends('backend.master')
@section('content')


<div>
    <h2><strong>Booking/</strong>details</h2>
</div>


<hr>
<br>
@if(session()->has('message'))
<span class="alert alert-success">
    {{ session()->get('message') }}
</span>
@endif

<div class="card">
    <table class="table table-bordered">
        <thead>
            <th scope="col">S.No</th>
            <!-- <th scope="col">Room name</th> -->
            <th scope="col">Room category</th>
            <th scope="col">Room number</th>
            <th scope="col">price</th>
            <th scope="col">Status </th>
            <th scope="col">Payment Status </th>
            <th >subtotal </th>
           
             
        </thead>
        <tbody>
        @foreach($book as $request)
            <tr>
               <td>{{$request->id }}</td>
               <td>{{$request->room->catagory->catagory_title }}</td>
                <!-- <td>{{$request->room->room_name }}</td> -->
                <td>{{$request->room->room_number }}</td>
                <td>{{$request->room->price}}</td>
                <td>{{$request->book->status}}</td>
                <td>{{$request->book->payment_status}}</td>
                
                <td >{{$request->subtotal}}</td>
                <!-- <td>
                <a href="{{route('booking.delete',$request->id)}}" class="btn btn-danger">delete</a>
                </td> -->
          
            </tr>
            @endforeach       
        </tbody>
    </table>
    
</div>
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
