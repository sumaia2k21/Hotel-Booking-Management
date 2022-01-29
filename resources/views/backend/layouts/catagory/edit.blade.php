@extends('backend.master')
@section('content')

<h2>Catagory/<small>add catagory</small></h2>
<div class="card">
    <div class="card-body">

        <form action="{{route('catagory.update',$category->id)}}" method="post" enctype="multipart/form-data">
        @method('put')   
        @csrf
            <div class="form-group">
                <label for="smallInput">Discount</label>
                <input type="number"  value="{{$category->discount}}" class="form-control form-control-sm" name="discount" id="Price" placeholder="Price">
            </div>
            <div class="form-group">
                        <label for="largeInput">price</label>
                        <input type="text"value="{{$category->price}}" class="form-control form-control"name="price" id="Description" placeholder="" readonly>
                    </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">update</button>

            </div>
        </form>
    </div>


    @endsection
