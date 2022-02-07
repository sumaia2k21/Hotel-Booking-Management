@extends('backend.master')
@section('content')

@if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
    </span>
    @endif

        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif
<h2>Catagory/<small>add catagory</small></h2>
<div class="card">
    <div class="card-body">

        <form action="{{route('catagory_list')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="largeSelect">Category Title</label>
                <select class="form-control form-control-lg" name="catagory_title" id="Catagory Title" required>
                    <option>Standard </option>
                    <option>Deluxe</option>
                    <option>Superior Deluxe </option>
                    <option>Premier Deluxe</option>
                    <option>Single</option>
                    <option>Double</option>
                   
                </select>
             </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control form-control" name="image" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="largeInput">Description</label>
                <textarea type="text" class="form-control form-control" name="description" id="Description"
                    placeholder="Description"></textarea>
            </div>
                    <!-- <div class="form-group">
                        <label for="largeInput">Discount</label>
                        <input type="text" class="form-control form-control" name="discount" id="Description" placeholder="">
                    </div> -->
           
                    <!-- <div class="form-group">
                        <label for="largeInput">price</label>
                        <input type="text" class="form-control form-control"name="price" id="Description" placeholder="" required>
                    </div> -->
            <div class="card-action">
                <button type="submit" class="btn btn-success">Add</button>

            </div>


           
        </form>
    </div>


    @endsection
