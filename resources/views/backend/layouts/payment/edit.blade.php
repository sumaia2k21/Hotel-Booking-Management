@extends('backend.master')
@section('content')
<h2>Payment</h2>
<hr>
<div class="card">
    <div class="card-body">
        <form action="{{route('payment.update',$payment->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
                <label for="smallInput">discount_price</label>
                <input type="text"  value="{{$payment->discount_price}}"class="form-control"  name="discount_price" id="Price" placeholder="total_ammount" readonly>
            </div>
            <div class="form-group">
                <label for="smallInput">pay_ammount</label>
                <input type="text" value="{{$payment->pay_ammount}}"  class="form-control" name="pay_ammount" id="pay_ammount" placeholder="pay_ammount">
            </div>
            <div class="form-group">
                <label for="smallInput">payment type</label>
                <input type="text" value="{{$payment->payment_type}}" class="form-control" name="payment_type" id="payment_type"
                    placeholder="payment_type">
            </div>
            <div class="form-group">
                <label for="smallInput">transection</label>
                <input type="text" value="{{$payment->transection}}"  class="form-control" name="transection" id="transection" placeholder="transection">
            </div>
            <div class="form-group">
                <label for="smallInput">payment date</label>
                <input type="date" value="{{$payment->payment_date}}" class="form-control" name="payment_date" id="payment_date"
                    placeholder="payment_date">
            </div>

            <div class="card-action">
                <button type="submit" class="btn btn-success">update</button>

            </div>
        </form>
    </div>
</div>
@endsection