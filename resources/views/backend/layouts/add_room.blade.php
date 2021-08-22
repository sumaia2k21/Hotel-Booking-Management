@extends('master')
@section('content')





<div class="col-md-6">
									<div class="card">
									
										<div class="card-header">
											<div class="card-title"><h2>Add Room</h2></div>
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
												<label for="squareSelect">Max Adults</label>
												<select class="form-control input-square" id="squareSelect">
												<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="squareSelect">Max Child</label>
												<select class="form-control input-square" id="squareSelect">
												<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="largeInput">Description</label>
												<input type="text" class="form-control form-control" id="Description" placeholder="Description">
											</div>
											
											<div class="form-group">
												<label for="squareSelect">No of bed</label>
												<select class="form-control input-square" id="squareSelect">
												<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											

											<div class="form-group">
												
												<label for="exampleFormControlFile1">Imaje</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</div>
											<div class="form-group">
												<label for="smallInput">Room Facilities</label>
												<input type="text" class="form-control form-control-sm" id="Price" placeholder="">
											</div>
											
											
										<div class="card-action">
											<button class="btn btn-success">Add</button>
											
										</div>
									</div>
									
								</div>
</div>
@endsection