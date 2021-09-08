@extends('backend.master')
@section('content')

<br>

<h2 style="background: #cccccc">Add Facilities</h2>
<div class="card">
    
    <div class="card-body">
        <form action="{{route('facility.update',$facility->id)}}" method="post" enctype="multipart/form-data" >
      @method('put')

            @csrf
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Imaje</label>
            <input value="{{$facility->imaje}}" class="form-control form-control-sm" name='imaje' id="formFileSm" type="file">
        </div>
        
        <div class="form-group">
            <label for="smallInput">Facilities title</label>
            <input type="text" value="{{$facility->facility_title}}" class="form-control form-control-sm" name='facility_title' id="Price" placeholder="facilities">
        </div>
        
        <div class="form-group">
            <label for="largeInput">Description</label>
            <!-- <input type="text" {{$facility->description}} class="form-control form-control" name='description' id="Description" placeholder="Description"> -->

            <textarea name="description" id="Description"  class="form-control form-control" placeholder="Description">{{$facility->description}}</textarea>
        </div>


        <div class="card-action">
            <button class="btn btn-success">update</button>

        </div>
        </form>
    </div>

    @endsection
