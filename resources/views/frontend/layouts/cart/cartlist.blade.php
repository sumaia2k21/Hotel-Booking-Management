@extends('frontend.index')
@section('content')

<section class="w3l-breadcrumb">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Cart list</h2>    
            </div>
        </div>
    </section>
    <br>
    @if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
    </span>
    @endif
    <br>
<div class="card">
    <table class="table table-bordered">
        <thead>
              <!-- <th scope="col">S.No</th> -->
              <th scope="col">sl</th>
            <th scope="col">Room number</th>
            <th scope="col">Room name</th>
            <!-- <th scope="col">From Date</th>
            <th scope="col">To Date</th> -->
            <th scope="col">Regular Price</th>
            <th scope="col">Discount Price</th>
            
            <th scope="col">Quantity</th>
            <!-- <th scope="col">Subtotal</th> -->
            <th scope="col">Action</th>
      
        </thead>

        @php
            $to_date=$value[3];
            $from_date=$value[1];
            $date1=date_create($from_date);
            $date2=date_create($to_date);
            $diff_in_days=date_diff($date1,$date2);
            //dd($diff_in_days);
            $days=$diff_in_days->days;
            // dd($days);
                               
            $subtotal=0;
        @endphp

        <tbody>
            @if($carts)
          
            @foreach($carts as $key=>$list)
        
            @php
            $regularprice = $list['price'] * $days;
            $daytotal = $list['discount_price'] * $days;
            $subtotal = $subtotal + $daytotal;
            @endphp
            <tr>
            
            <td>{{$list['room_id']}}</td>
                <td>{{$list['room_number']}}</td>
                <td>{{$list['room_name']}}</td>
                <!-- <td>{{$from_date}}</td>
                <td>{{$to_date}}</td> -->
                <td>{{$regularprice}}</td>
                <td>{{$daytotal}}</td>
                <td>{{$list['room_qty']}}</td>
               <td><a href="{{route('cart.delete',$key)}}" type="button" class="btn btn-primary">X</a>
            </td>
           
            </tr>
           
                
           @endforeach
                <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Sub Total:</strong></th>
                    <td colspan="7">{{$subtotal}} /=</td>

               
                </tr>

         
           @endif
        </tbody>
    </table> 

</div>
<a href="{{route('cart.clear')}}" type="button" class="btn btn-primary">clear cart</a>
<a href="{{route('cart.checkout.form')}}" type="button" class="btn btn-primary">Book now</a>                  
<!-- <a href="{{route('cart.checkout.form')}}" type="button" class="btn btn-primary">checkoutform</a>               -->
<br>
<br>
<br>
   
@endsection
