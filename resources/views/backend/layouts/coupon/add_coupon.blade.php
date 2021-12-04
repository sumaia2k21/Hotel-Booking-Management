@extends('backend.master')
@section('content')

<br>

<h2 >Add Gallary</h2>
@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
<div class="card">
  

    <div class="card-body">
        <form action="{{route('coupon.post')}}"method="post"enctype="multipart/form-data" >
            @csrf
        
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Coupon code</label>
            <input type="text" class="form-control form-control-sm"  name='code' id="formFileSm" >
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Coupon type</label>
            <input type="text" class="form-control form-control-sm"  name='type' id="formFileSm" >
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Coupon value</label>
            <input type="text" class="form-control form-control-sm"  name='value' id="formFileSm" >
        </div>

        <div class="card-action">
            <button class="btn btn-success">add </button>

        </div>
        </form>
    </div>
</div>
    @endsection
