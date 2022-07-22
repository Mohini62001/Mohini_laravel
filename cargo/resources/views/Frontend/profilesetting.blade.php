@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

@push ('title')
 <title>Profile</title>
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
										<h4>Genral Settings</h4>
									</div>
								</div>
								<form class="user-setting">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-profile-pic">
										<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
											<div class="profile-pic">
												<div class="cs-media">
													<figure> <img src="{{url('Frontend/assets/extra-images/profile-pic.jpg')}}" alt=""/> </figure>
												</div>
											</div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
											<div class="cs-browse-holder"> <em>My Profile Photo</em> <span class="file-input btn-file"> Update Avatar
												<input type="file" multiple>
												</span> </div>
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Full Name</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Email Address</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<label>Name</label>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<label>Date of Birth</label>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<select data-placeholder="Select Make" tabindex="1" class="chosen-select">
															<option value="United States">01</option>
															<option value="United Kingdom">02</option>
															<option value="Afghanistan">03</option>
															<option value="Afghanistan">04</option>
															<option value="Afghanistan">05</option>
															<option value="Afghanistan">06</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Country</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>City</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
								
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-seprator"></div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h6>Contact Information</h6>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Mobile Number</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Phone number</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Emaill Address</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-seprator"></div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h6>Update password</h6>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Password</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<div class="cs-field-holder">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Confirm password</label>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-field">
											<input type="text" placeholder="" >
										</div>
									</div>
								</div>
								<br>
								
								
								<div class="cs-field-holder">
									<div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
										<div class="cs-field"><div class="cs-btn-submit"><input type="submit" value="Save Changes" ></div></div>
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