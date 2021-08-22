
@extends('master')
@section('content')

<div class="card">
										<div class="card-header">
											<div class="card-title">Add Facilities</div>
										</div>
										<div class="card-body">
										<div class="mb-3">
 											 <label for="formFileSm" class="form-label">Imaje</label>
  												<input class="form-control form-control-sm" id="formFileSm" type="file">
										</div>
											<div class="form-group">
												<label for="smallInput">Facilities title</label>
												<input type="text" class="form-control form-control-sm" id="Price" placeholder="Price">
											</div>
											<div class="form-group">
												<label for="largeInput">Description</label>
												<input type="text" class="form-control form-control" id="Description" placeholder="Description">
											</div>
											
										
										<div class="card-action">
											<button class="btn btn-success">Add</button>
											
										</div>
									</div>

@endsection					