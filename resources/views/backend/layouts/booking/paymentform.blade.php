@extends('backend.master')
@section('content')
<h2>Payment</h2>
<hr>
<div class="card">
    <div class="card-body">
        <form action="{{route('payment.store',$book->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="smallInput">booking-id</label>
                <input type="text" value="{{$book->id}}" class="form-control" name="book_id" id=""
                    placeholder="book_id" readonly>
            </div>
            <div class="form-group">
                <label for="smallInput">Total Ammount</label>
                <input type="text"  value="{{$book->total_ammount}}"class="form-control"  name="total_ammount" id="Price" placeholder="total_ammount" readonly>
            </div>
           
            <div class="form-group">
                <label for="smallInput">discount_price</label>
                <input type="text"  value="{{$book->discount_price}}"class="form-control"  name="discount_price" id="Price" placeholder="total_ammount" readonly>
            </div>
            <div class="form-group">
                <label for="smallInput">pay_ammount</label>
                <input type="text" class="form-control" name="pay_ammount" id="pay_ammount" placeholder="pay_ammount">
            </div>
            <div class="form-group">
                <label for="smallInput">payment type</label>
                <input type="text" class="form-control" name="payment_type" id="payment_type"
                    placeholder="payment_type">
            </div>
            <div class="form-group">
                <label for="smallInput">transection</label>
                <input type="text" class="form-control" name="transection" id="transection" placeholder="transection">
            </div>
            <div class="form-group">
                <label for="smallInput">payment date</label>
                <input type="date" class="form-control" name="payment_date" id="payment_date"
                    placeholder="payment_date">
            </div>

            <div class="card-action">
                <button type="submit" class="btn btn-success">submit</button>

            </div>
        </form>
    </div>
</div>
@endsection