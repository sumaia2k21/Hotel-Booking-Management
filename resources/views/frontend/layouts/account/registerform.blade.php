<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="modal-dialog modal-dialog-scrollable">
<div class="container">
    <form class="form-horizontal" role="form">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>

            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" class="form-control">
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-9">
                <select id="country" class="form-control">
                    <option>Afghanistan</option>
                    <option>Bahamas</option>
                    <option>Cambodia</option>
                    <option>Denmark</option>
                    <option>Ecuador</option>
                    <option>Fiji</option>
                    <option>Gabon</option>
                    <option>Haiti</option>
                </select>
            </div>
        </div> -->
         <!-- /.form-group -->
        <div class="form-group">
            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="femaleRadio" value="Female">Female
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="maleRadio" value="Male">Male
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                        </label>
                    </div>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <!-- <div class="form-group">
                    <label class="control-label col-sm-3">Meal Preference</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                            </label>
                        </div>
                    </div>
                </div> -->
        <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I accept <a href="#">terms</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
</div>

</div> <!-- ./container -->

<style>
    body {
        background-color: #eee;
    }

    *[role="form"] {
        max-width: 530px;
        padding: 15px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 0.3em;
    }

    *[role="form"] h2 {
        margin-left: 5em;
        margin-bottom: 1em;
    }

</style>

<!-- @extends('frontend.index')
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

@endsection -->
