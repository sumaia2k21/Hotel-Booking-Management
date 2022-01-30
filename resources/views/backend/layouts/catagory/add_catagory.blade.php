@extends('backend.master')
@section('content')

<h2>Catagory/<small>add catagory</small></h2>
<div class="card">
    <div class="card-body">

        <form action="{{route('catagory_list')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="largeSelect">Category Title</label>
                <select class="form-control form-control-lg" name="catagory_title" id="Catagory Title">
                    <option>Standard </option>
                    <option>Deluxe</option>
                    <option>Superior Deluxe </option>
                    <option>Premier Deluxe</option>
                    <option>Single</option>
                    <option>Double</option>
                    <option>Twin</option>
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
                <label for="smallInput">Discount</label>
                <input type="number" class="form-control form-control-sm" name="discount" id="Price" placeholder="discount">
            </div>
             -->
                    <div class="form-group">
                        <label for="largeInput">price</label>
                        <input type="text" class="form-control form-control"name="price" id="Description" placeholder="">
                    </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Add</button>

            </div>


           
        </form>
    </div>


    @endsection
