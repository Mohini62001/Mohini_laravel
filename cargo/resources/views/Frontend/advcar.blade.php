	@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

@push ('title')
 <title>Car Advertisement</title>
 @endpush
	<!-- Main Start -->
	<div class="main-section">
    	<div class="page-section" style="background:url({{url('Frontend/assets/extra-images/user-bg-img.jpg')}}) no-repeat;background-size:cover;min-height:175px;margin-top:-30px;margin-bottom:-129px;"></div>
		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="cs-user-account-holder">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<ul class="cs-user-accounts-list">
										<li><a href="mycar">My vehicles</a></li>
								        <li><a href="userpayment">Payments</a></li>
										<li class="active"><a href="profilesetting">Profile Settings</a></li>
										<li><a href="advcar">Post a  vehicles</a></li>
										<li><a href="#">Sign Out</a></li>
									</ul>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-user-section-title">
										<h4>Post New Vehicles</h4>
									</div>
								</div>
								<form class="user-post-vehicles">
									<div class="cs-field-holder">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h6>vehicles Information</h6>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-seprator"></div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Vehicles Title</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<input type="text">
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Model Year</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
													<option value="United States">United States</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
												</select>
											</div>
										</div>
									</div>
								
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Model</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field has-error">
												<select data-placeholder="Select Model" tabindex="1" class="chosen-select">
													<option value="United States">Model.01</option>
													<option value="United Kingdom">Model.02</option>
													<option value="Afghanistan">Model.03</option>
													<option value="Afghanistan">Model.04</option>
													<option value="Afghanistan">Model.05</option>
													<option value="Afghanistan">Model.06</option>
												</select>
												<span>Please select model</span>
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Vehicles Version</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
													<option value="United States">Vehicles Version</option>
													<option value="United Kingdom">Vehicles Version</option>
													<option value="Afghanistan">Vehicles Version</option>
													<option value="United Kingdom">Vehicles Version</option>
													<option value="Afghanistan">Vehicles Version</option>
													<option value="United Kingdom">Vehicles Version</option>
												</select>
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>City</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
													<option value="United States">United States</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
												</select>
												<em>Enter valid mileage (1-1000000)</em></div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Price* ($)</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
													<option value="United States">United States</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
												</select>
												<em>Enter valid mileage (1-1000000)</em></div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h6>vehicles Information</h6>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-seprator"></div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Description</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<textarea></textarea>
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h6>Upload Images</h6>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-seprator"></div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="cs-upload-img">
												<ul>
													<li><a href="#"><img src="{{url('Frontend/assets/extra-images/upload-img-1.jpg')}}" alt="" /></a></li>
													<li><a href="#"><img src="{{url('Frontend/assets/extra-images/upload-img-2.jpg')}}" alt="" /></a></li>
													<li><a href="#"><img src="{{url('Frontend/assets/extra-images/upload-img-3.jpg')}}" alt="" /></a></li>
												</ul>
												<p>Pictures should be in "jpeg, jpg, png, gif" format only.</p>
												<p>You can select and upload multiple pictures at the same time.</p>
												<div class="cs-browse-holder"><span class="file-input btn-file"> Upload Photos
													<input type="file" multiple>
													</span> </div>
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h6>Upload Images</h6>
										</div>
									</div>
									
								<br>
									<div class="cs-field-holder">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h6>Contact Information</h6>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-seprator"></div>
									</div>
									
									
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Mobile Number</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field has-error">
												<input type="text" >
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Email Address</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<input type="text" >
											</div>
										</div>
									</div>
									
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Country</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
													<option value="United States">United States</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
												</select>
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>City</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
													<option value="United States">United States</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="United Kingdom">United Kingdom</option>
												</select>
											</div>
										</div>
									</div>
									<div class="cs-field-holder">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<label>Complete addres</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-field">
												<textarea></textarea>
											</div>
										</div>
									</div>
									
									
									<div class="cs-field-holder">
										<div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
											<div class="cs-field">
												<div class="cs-btn-submit">
													<input type="submit" value="SUBMIT & CONTINUE" >
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="page-section" style="background:#19171a;">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="cs-ad" style="text-align:center; padding:55px 0 32px;">
                          <div class="cs-media">
                                <figure>
                                    <img src="{{url('Frontend/assets/extra-images/cs-ad-img.jpg')}}" alt="" />
                                </figure>
                        	</div>
                    	</div>
                    </div>
                </div>
            </div>
  		</div>
	</div>
	<!-- Main End --> 
	@endsection