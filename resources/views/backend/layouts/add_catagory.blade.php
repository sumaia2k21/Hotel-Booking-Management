@extends('master')
@section('content')

<div class="card">
										<div class="card-header">
											<div class="card-title">Add Catagory</div>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label for="largeSelect">Catagory Title</label>
												<select class="form-control form-control-lg" id="Catagory Title">
													<option>Standard </option>
													<option>Deluxe</option>
													<option>Superior Deluxe </option>
													<option>Single</option>
													<option>Premier Deluxe</option>
												</select>
												
											</div>
											<div class="form-group">
												<label for="largeInput">Description</label>
												<input type="text" class="form-control form-control" id="Description" placeholder="Description">
											</div>
											<div class="form-group">
												<label for="smallInput">Price</label>
												<input type="text" class="form-control form-control-sm" id="Price" placeholder="Price">
											</div>
											<!-- <div class="form-group">
												<label for="largeSelect">Large Select</label>
												<select class="form-control form-control-lg" id="largeSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="defaultSelect">Default Select</label>
												<select class="form-control form-control" id="defaultSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="smallSelect">Small Select</label>
												<select class="form-control form-control-sm" id="smallSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
										</div> -->
										<div class="card-action">
											<button class="btn btn-success">Add</button>
											
										</div>
									</div>

@endsection					