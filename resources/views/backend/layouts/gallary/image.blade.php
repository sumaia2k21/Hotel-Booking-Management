@extends('backend.master')
@section('content')

<br>

<h2 >Add Gallary</h2>
<div class="card">

<body>

<div class="container mt-4">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <input type="file" name="images[]" multiple class="form-control" accept="image/*">
          @if ($errors->has('files'))
            @foreach ($errors->get('files') as $error)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
            </span>
            @endforeach
          @endif
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
</div>
</body>

    <!-- <div class="card-body">
        <form action="{{route('gallaries.post')}}"method="post"enctype="multipart/form-data" >
            @csrf
        <div class="mb-3">
            <label for="formFileSm" class="form-label">name</label>
            <input type="file" class="form-control form-control-sm"  name='name' id="formFileSm" >
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">path</label>
            <input type="text" class="form-control form-control-sm"  name='path' id="formFileSm" >
        </div>
       
        <div class="card-action">
            <button class="btn btn-success">add </button>

        </div>
        </form>
    </div> -->
</div>
    @endsection
