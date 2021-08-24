@extends('backend.master')
@section('content')

<div class="card">

    <div class="card-header">
        <div class="card-title">
            <h2>About_us<h2>
        </div>
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="smallInput">Page title title</label>
                <input type="text" class="form-control form-control-sm" id="Price" placeholder="Price">
            </div>
          
            <div class="form-group">
                <label for="largeInput">Page Description</label>
                <input type="text" class="form-control form-control" id="Description" placeholder="Description">
            </div>
        </form>

        <div class="card-action">

            <button type="submit" class="btn btn-success">update </button>

        </div>
    </div>

</div>



<!-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->


@endsection
