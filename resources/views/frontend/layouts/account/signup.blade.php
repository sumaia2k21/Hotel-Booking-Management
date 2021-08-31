@extends('frontend.index')
@section('content')
<h2>please sign in here</h2>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <form action="{{route('user.signup.store')}}"type="form"method="post">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name="guest_name" class="form-control" id="name"  placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"name="guest_email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="guest_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile No</label>
    <input type="text"name="guest_mobile_no" class="form-control" id="mobile" placeholder="Enter email">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-md-3"></div>

</div>

@endsection