@extends('master')
@section('content')
<h1>Edit Profile</h1>
<hr>
<div class="card">
    <form class="form-horizontal" role="form">

        <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="">
            </div>
        </div>
        <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div> -->
        <!-- <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="">
            </div>
          </div> -->
        <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
                <input class="form-control" type="password" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
                <input class="form-control" type="password" value="">
            </div>
        </div>
        <!-- <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="">
              <span></span>
              <input type="reset" class="btn btn-default" value="">
            </div>
          </div> -->
        <a type="button" class="btn btn-success">Submit</a>
    </form>
</div>
</hr>
@endsection
