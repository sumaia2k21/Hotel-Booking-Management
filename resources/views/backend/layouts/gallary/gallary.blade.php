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
        <form action="{{route('gallaries.post')}}"method="post"enctype="multipart/form-data" >
            @csrf
        <div class="mb-3">
            <label for="formFileSm" class="form-label">gallery</label>
            <!-- <input type="file" class="form-control form-control-sm"  name='image1' id="formFileSm"> -->
            <input type="file" name="image[]" multiple class="form-control" accept="image/*">
        </div>
       
        <div class="card-action">
            <button class="btn btn-success">add </button>

        </div>
        </form>
    </div>
</div>
    @endsection
