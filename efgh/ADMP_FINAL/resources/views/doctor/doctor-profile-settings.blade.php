@extends('doctor.Layout.main_layout') 	
@section('main_container')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								
								@include('doctor/Layout/doctor-widget');
								
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
						<form action="{{url('/editdoctor/{id}')}}" method="post" enctype="multipart/form-data">
						@csrf
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
							            <div class="col-md-8">
											<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
													<!--<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">--->
											<!--<input type="file" class="form-control" value="{{asset('upload/doctor/'.$fetch->profile_img)}}" name="profile_img" alt="User Image">-->
													<img src="{{asset('upload/doctor/'.$fetch->profile_img)}}" height="50px" width="50px"> 
													    
														<!--<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">-->
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="file" class="upload" name="profile_img" value="{{asset('upload/doctor/'.$fetch->profile_img)}}">
														</div>
														<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
													</div>
													@if(session()->has('success'))
												
														<i class="alert alert-success">{{session('success')}}</i>
												
													@endif
												</div>
											</div>
											
										</div>
										<div class="col-md-4">
											<h4><u>Manage Appointment status</u></h4>
											
											
											<h6>Patient Status : <a href="{{url('patient_appointment_status/'.$fetch->id)}}" class="btn btn-primary btn-sm"><?php echo $fetch->hospital_status?></a></h6>
											<h6>Pharma Status : <a href="{{url('pharma_appointment_status/'.$fetch->id)}}" class="btn btn-primary btn-sm"><?php echo $fetch->visitor_status?></a></h6>
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name </label>
												<input type="text" class="form-control" name="first_name" value="<?php echo $fetch->first_name?>">
												@if ($errors->has('first_name'))
            										<span class="text-danger">{{ $errors->first('first_name') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name </label>
												<input type="text" class="form-control" name="last_name" value="<?php echo $fetch->last_name?>">
												@if ($errors->has('last_name'))
            										<span class="text-danger">{{ $errors->first('last_name') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email </label>
												<input type="email" class="form-control" name="email" value="<?php echo $fetch->email?>" readonly >
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>Short Title</label>
												<input type="text" class="form-control" name="short_tittle" value="<?php echo $fetch->short_tittle?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Gender</label>
												<select class="form-control select" name="gender">
												<?php
													$gender=$fetch->gender;
													if($gender=="Male")
														{
												?>
														<option>Select Gender</option>
														<option value="Male" selected>Male</option>
														<option>Female</option>
												<?php
														}
													else
														{
												?>
														<option>Select Gender</option>
														<option >Male</option>
														<option value="Female" selected>Female</option>
												<?php
														}
												?>
												</select>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Birth</label>
												<input type="date" class="form-control" name="dob" value="<?php echo $fetch->dob?>">
												@if ($errors->has('dob'))
            										<span class="text-danger">{{ $errors->first('dob') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Anniversary</label>
												<input type="date" class="form-control" name="doa" value="<?php echo $fetch->doa?>">
												@if ($errors->has('doa'))
            										<span class="text-danger">{{ $errors->first('doa') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Specialist ID</label>
												<select class="select" name="specialist_id" value="<?php echo $fetch->name?>">
															<option value="">Select</option>
															<?php
															foreach($special_id_arr as $data)
															{
																if($data->id==$fetch->specialist_id)
															 	{
															?>
															<option value="<?php echo $data->id;?>" selected>
														        <?php echo $data->name ?></option>
															<?php
															    }
																else
                                                                {
															?>
															<option value="<?php echo $data->id;?>">
                                                            <?php echo $data->name;?></option>
															<?php
															    }
														    }
														  ?>
														</select>
													</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Education</label>
												<input type="text" class="form-control" name="education" value="<?php echo $fetch->education?>">
												@if ($errors->has('education'))
            										<span class="text-danger">{{ $errors->first('education') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Experience</label>
												<input type="text" class="form-control" name="experience" value="<?php echo $fetch->experience?>">
												@if ($errors->has('experience'))
            										<span class="text-danger">{{ $errors->first('experience') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Liacence no</label>
												<input type="text" class="form-control" name="liacence_no" value="<?php echo $fetch->liacence_no?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control" name="dr_mobile" value="<?php echo $fetch->dr_mobile?>">
												@if ($errors->has('dr_mobile'))
            										<span class="text-danger">{{ $errors->first('dr_mobile') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Visiting Card</label>
												<input type="file" class="form-control" value="{{asset('upload/visitingcard/'.$fetch->visit_card)}}" name="visit_card">
												<img src="{{asset('upload/visitingcard/'.$fetch->visit_card)}}" height="50px" width="50px">
												@if ($errors->has('visit_card'))
            												<span class="text-danger">{{ $errors->first('visit_card') }}</span>
       													@endif
									<!---		@if ($errors->has('visit_card'))
            										<span class="text-danger">{{ $errors->first('visit_card') }}</span>
       											@endif-->
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Notification</label>
												<input type="text" class="form-control" name="notification" value="<?php echo $fetch->notification?>">
												@if ($errors->has('notification'))
            										<span class="text-danger">{{ $errors->first('notification') }}</span>
       											@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Basic Information -->
							
							<!-- About Me -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">About Me</h4>
									<div class="form-group mb-0">
										<textarea name="about" class="form-control" rows="5" value=""><?php echo $fetch->about?></textarea>
									</div>
								</div>
							</div>
							<!-- /About Me -->
							
							<!-- Clinic Info -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Hospital Info</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Hospital Name</label>
												<input type="text" class="form-control" name="hospital_name" value="<?php echo $fetch->hospital_name?>">
												@if ($errors->has('hospital_name'))
            										<span class="text-danger">{{ $errors->first('hospital_name') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Office No</label>
												<input type="text" class="form-control" name="office_no" value="<?php echo $fetch->office_no?>">
												@if ($errors->has('office_no'))
            										<span class="text-danger">{{ $errors->first('office_no') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Hospital Image</label>
												<input type="file" value="{{asset('upload/hospital/'.$fetch->hospital_img)}}" class="form-control" name="hospital_img[]" multiple>
												
												<div class="clinic-details">
													<ul class="clinic-gallery">
													<?php
														$hospital_img=$fetch->hospital_img;
														$img_arr=explode(",",$hospital_img);
														foreach($img_arr as $d)
														{
														?>
														<li>
															<a href="{{asset('upload/hospital/'.$d)}}" data-fancybox="gallery">
																<img src="{{asset('upload/hospital/'.$d)}}" style="height:50px;width:50px;" alt="Feature">
															</a>
														</li>
														<?php
														}
														?>
													</ul>
													
												</div>
												
												@if ($errors->has('hospital_img'))
            										<span class="text-danger">{{ $errors->first('hospital_img') }}</span>
       											@endif
										<!------@if ($errors->has('hospital_img'))
            										<span class="text-danger">{{ $errors->first('hospital_img') }}</span>
       											@endif---->
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Visitor Pharma Schedule</label>
												<select class="form-control select" name="visit_pharma_per">
												
														<option selected>Select Schedule</option>
														<option value="1-1">Once in a Month</option>
														<option value="1-2">Twice in a Month</option>
														<option value="1-3">Thrice in a Month</option>
														<option value="2-1">Once Visit in a 2 Month</option>
														<option value="3-1">Once Visit in a 3 Month</option>
												
												</select>
												
											</div>
										</div>
								</div>
							</div>
							<!-- /Clinic Info -->

							<!-- Contact Details -->
							<div class="card contact-card">
								<div class="card-body">
									<h4 class="card-title">Contact Details</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address" value="<?php echo $fetch->address?>">
												@if ($errors->has('address'))
            										<span class="text-danger">{{ $errors->first('address') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">State</label>
												<select class="select" id="sid" name="state" value="<?php echo $fetch->state?>">
															<option value="">Select</option>
															<?php
															foreach($state_id_arr as $d)
															{
																if($d->id==$fetch->state)
															 	{
															?>
															<option value="<?php echo $d->id;?>"selected>
															<?php echo $d->state_name ?></option>
															<?php
															    }
																else
                                                                {
															?>
															<option value="<?php echo $d->id;?>" >
															<?php echo $d->state_name ?></option>
															<?php
															    }
														    }
														    ?>
														</select>
														@if ($errors->has('state'))
            												<span class="text-danger">{{ $errors->first('state') }}</span>
       													@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">City</label>
												<select class="select" name="city" id="city_id" value="<?php echo $fetch->city_name?>">
															<option value="">Select City</option>
															<?php
															foreach($city_id_arr as $c)
															{
																if($c->id==$fetch->city)
															 	{
															?>
															<option value="<?php echo $c->id;?>"selected>
														       <?php echo $c->city_name ?></option>
															<?php
															    }
															}	
															?>
															
														</select>
														@if ($errors->has('city'))
            												<span class="text-danger">{{ $errors->first('city') }}</span>
       													@endif
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Area</label>
												<select class="select" name="area" id="area_id" value="<?php echo $fetch->area_name?>">
															<option value="">Select Area</option>
															<?php
															foreach($area_id_arr as $a)
															{
																if($a->id==$fetch->area)
															 	{
															?>
															<option value="<?php echo $a->id;?>"selected>
														       <?php echo $a->area_name ?></option>
															<?php
															    }
															}
															?>
															
														</select>
														@if ($errors->has('area'))
            												<span class="text-danger">{{ $errors->first('area') }}</span>
       													@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Postal Code</label>
												<input type="text" class="form-control" name="pincode" value="<?php echo $fetch->pincode?>">
												@if ($errors->has('pincode'))
            										<span class="text-danger">{{ $errors->first('pincode') }}</span>
       											@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Google Map</label>
												<input type="url" class="form-control" name="google_map" value="<?php echo $fetch->google_map?>">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Contact Details -->
							
							<!-- Pricing -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Pricing</h4>
								<div class="row form-row">
									<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Consulting Fees</label>
												<input type="text" class="form-control" name="consulting_fees" value="<?php echo $fetch->consulting_fees?>">
												@if ($errors->has('consulting_fees'))
            										<span class="text-danger">{{ $errors->first('consulting_fees') }}</span>
       											@endif
											</div>
										</div>
									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Followup Fees</label>
												<input type="text" class="form-control" name="followup_fees" value="<?php echo $fetch->followup_fees?>">
												@if ($errors->has('followup_fees'))
            										<span class="text-danger">{{ $errors->first('followup_fees') }}</span>
       											@endif
											</div>
										</div>
								</div>
								</div>
							</div>
							<!-- /Pricing -->

							<!-- Pricing -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Working Day & Timing</h4>
								<div class="row form-row">
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Monday</label>
											<input type="checkbox" name="day[]" value="Monday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Monday",$day_arr))
																{
																	echo "checked";
																}
																?> >
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Tuesday</label>
											<input type="checkbox" name="day[]" value="Tuesday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Tuesday",$day_arr))
																{
																	echo "checked";
																}
																?>>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Wednesday</label>
											<input type="checkbox" name="day[]" value="Wednesday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Wednesday",$day_arr))
																{
																	echo "checked";
																}
																?>>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Thursday</label>
											<input type="checkbox" name="day[]" value="Thursday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Thursday",$day_arr))
																{
																	echo "checked";
																}
																?>>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Friday</label>
											<input type="checkbox" name="day[]" value="Friday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Friday",$day_arr))
																{
																	echo "checked";
																}
																?>>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Saturday</label>
											<input type="checkbox" name="day[]" value="Saturday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Saturday",$day_arr))
																{
																	echo "checked";
																}
																?>>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Sunday</label>
											<input type="checkbox" name="day[]" value="Sunday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Sunday",$day_arr))
																{
																	echo "checked";
																}
																?>>
										</div>
										@if ($errors->has('day'))
            								<span class="text-danger">{{ $errors->first('day') }}</span>
       									@endif
									</div>
									<div class="col-md-2">
									</div>
									<div class="col-md-2">
									</div>
									<div class="col-md-2">
									</div>
									<div class="col-md-2">
									</div>
									<div class="col-md-2">
									</div>

									<h5 class="card-title">Morning Time</h5><br>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label">TO</label>
											<input type="time" name="hospital_morning_to"  class="form-control" value="<?php echo $fetch->hospital_morning_to?>">
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label">From</label>
											<input type="time" name="hospital_morning_from"  class="form-control" value="<?php echo $fetch->hospital_morning_from?>">
										</div>
									</div>
                                     
									<h5>Afternoon Time</h5><br>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label">TO</label>
											<input type="time" name="hospital_afternoon_to"  class="form-control" value="<?php echo $fetch->hospital_afternoon_to?>">
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label">From</label>
											<input type="time" name="hospital_afternoon_from"  class="form-control" value="<?php echo $fetch->hospital_afternoon_from?>">
										</div>
									</div>

									<h5>Evening Time</h5><br>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label">TO</label>
											<input type="time" name="hospital_evening_to"  class="form-control" value="<?php echo $fetch->hospital_evening_to?>">
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label">From</label>
											<input type="time" name="hospital_evening_from"  class="form-control" value="<?php echo $fetch->hospital_evening_from?>">
										</div>
									</div>
								</div>
								</div>
							<div class="row" style="padding-left:25px;">
								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label">Ref. Medical Store Name</label>
										<input type="text" class="form-control" name="medical_store" value="<?php echo $fetch->medical_store?>">
										@if ($errors->has('medical_store'))
											<span class="text-danger">{{ $errors->first('medical_store') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label>Pharma Appointment Request Required</label>
										<select class="form-control select" name="visitor_request">
										<?php
											$visitor_request=$fetch->visitor_request;
											if($visitor_request=="Yes")
												{
										?>
												<option>Select Status</option>
												<option value="Yes" selected>Yes</option>
												<option>No</option>
										<?php
												}
											else
												{
										?>
												<option>Select Status</option>
												<option >Yes</option>
												<option value="No" selected>No</option>
										<?php
												}
										?>
										</select>
										
									</div>
								</div>
							</div>
								<div class="submit-section submit-btn-bottom" style="padding-left:15px;">
									<button type="submit"  class="btn btn-primary submit-btn" name="submit" value="send">Save Changes</button>
								</div>		
							</div>
							<!-- /Pricing -->
							
							
						
							
							
						</form>	
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			<script>
$('#sid').on('change', function () {
                var sid = this.value;
                $('#city_id').html('');
                $.ajax({
				url:"{{url('/getCity')}}",
				type: "POST",
				data: {
				sid: sid,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#city_id').html('<option value="">Select City</option>');
                        $.each(result.cities, function (key, value) {
                            $('#city_id').append('<option value="' + value.id + '">' + value.city_name + '</option>');
                        });
                        
                    }
                });
            });
			
$('#city_id').on('change', function () {
                var city_id = this.value;
                $('#area_id').html('');
                $.ajax({
				url:"{{url('/getArea')}}",
				type: "POST",
				data: {
				city_id: city_id,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#area_id').html('<option value="">Select Area</option>');
                        $.each(result.areas, function (key, value) {
                            $('#area_id').append('<option value="' + value.id + '">' + value.area_name + '</option>');
                        });
                        
                    }
                });
            });			
</script>
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Select2 JS -->
		<script src="{{  url('Frontend/assets/plugins/select2/js/select2.min.js') }}"></script>
		
		<!-- Dropzone JS -->
		<script src="{{  url('Frontend/assets/plugins/dropzone/dropzone.min.js') }}"></script>
		
		<!-- Bootstrap Tagsinput JS -->
		<script src="{{  url('Frontend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
		
		<!-- Profile Settings JS -->
		<script src="{{  url('Frontend/assets/js/profile-settings.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/doctor-profile-settings')}}  30 Nov 2019 04:12:15 GMT -->
</html>
@endsection	