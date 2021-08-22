
 @extends('master')
@section('content')
   



<div class="col-md-6">
									<div class="card">
									
										<div class="card-header">
                                            
											<div class="card-title"><h1>Book Your room<h2></div>
										</div>
										<div class="card-body">
                                        <div class="form-group">
												<label for="squareSelect">Name</label>
												<select class="form-control input-square" id="squareSelect">
													
												</select>
											</div>
											<div>
												


                                            <div class="form-group">
											<label for="email">Email </label>
											<input type="email" class="form-control" id="email" placeholder="Enter Email">
											<small id="emailHelp" class="form-text text-muted"></small>
										</div>
                                        
									
											<div class="form-group">
												<label for="squareInput">Room Catagory</label>
												<input type="text" class="form-control input-square" id="squareInput" placeholder="Square Input">
											</div>
											
                                            <div class="form-check">
											<label>Gender</label><br/>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
												<span class="form-radio-sign">Male</span>
											</label>
											<label class="form-radio-label ml-3">
												<input class="form-radio-input" type="radio" name="optionsRadios" value="">
												<span class="form-radio-sign">Female</span>
											</label>
										</div>
                                        <div class="form-group">
												<label for="comment">Comment</label>
												<textarea class="form-control" id="comment" rows="5">

												</textarea>
											</div>

											<div class="form-group">
												<label for="exampleFormControlFile1">Address</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</div>
											<div class="form-group">
												<label for="pillInput">Price</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="Pill Input">
											</div>
											
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
									</div>
									
								</div>
</div>
@endsection