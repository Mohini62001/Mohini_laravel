@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Add Doctor</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Doctor</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								
								<div class="card-body">
									<h4 class="card-title">Personal Information</h4><br>
									<form action="{{url('/edit/'.$fetch->id )}}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="row">
											<div class="col-xl-6">
											@if(session()->has('success'))
												
												<i class="alert alert-success">{{session('success')}}</i>
												
											@endif
											    <div class="row">
													<label class="col-lg-3 col-form-label">Name</label>
													<div class="col-lg-9">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="First Name" class="form-control" name="first_name" value="<?php echo $fetch->first_name?>">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="Last Name" class="form-control" name="last_name" value="<?php echo $fetch->last_name?>">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">DOB</label>
													<div class="col-lg-9">
														<input type="date" class="form-control" name="dob" value="<?php echo $fetch->dob?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Gender</label>
													<div class="col-lg-9">
														<div class="form-check form-check-inline">
														<?php
															$gender=$fetch->gender;
															if($gender=="Male")
															{
														?>
															<input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" checked>
															<label class="form-check-label" for="gender_male">
															Male
															</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
															<label class="form-check-label" for="gender_female">
															Female
															<?php
																}
																else
																{
															?>	
															<input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" >
															<label class="form-check-label" for="gender_male">
															Male
															</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female" checked>
															<label class="form-check-label" for="gender_female">
															Female
															<?php
																}
															?>
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Specialist ID</label>
													<div class="col-lg-9">
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
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Liacence No</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="liacence_no" value="<?php echo $fetch->liacence_no?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Experience</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="experience" value="<?php echo $fetch->experience?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Dr. Mobile</label>
													<div class="col-lg-9">
														<input type="tel" class="form-control" name="dr_mobile" value="<?php echo $fetch->dr_mobile?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">About</label>
													<div class="col-lg-9">
														<textarea name="about" rows="4" cols="5" class="form-control" placeholder="Enter message" value=""><?php echo $fetch->about?></textarea>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Short Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="short_tittle" value="<?php echo $fetch->short_tittle?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Email</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="email" value="<?php echo $fetch->email?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Profile Img</label>
													<div class="col-lg-9">
														<input type="file" class="form-control" name="profile_img" value="{{asset('upload/doctor/'.$fetch->profile_img)}}">
													    <img src="{{asset('upload/doctor/'.$fetch->profile_img)}}" height="50px" width="50px">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Education</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="education" value="<?php echo $fetch->education?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Visiting Card</label>
													<div class="col-lg-9">
														<input type="file" class="form-control" name="visit_card" value="{{asset('upload/visitingcard/'.$fetch->visit_card)}}">
														<img src="{{asset('upload/visitingcard/'.$fetch->visit_card)}}" height="50px" width="50px">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Office no</label>
													<div class="col-lg-9">
														<input type="tel" class="form-control" name="office_no" value="<?php echo $fetch->office_no?>">
													</div>
												</div>
											</div>
											
										</div>

										<h4 class="card-title">Hospital Details</h4><br>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hospital Name</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hospital_name" value="<?php echo $fetch->hospital_name?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hospital timing</label>
													<div class="col-lg-9">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group ">
																	To:
																	<input type="time" name="hospital_time_to" class="form-control" value="<?php echo $fetch->hospital_time_to?>">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	From:
																	<input type="time" name="hospital_time_from" class="form-control" value="<?php echo $fetch->hospital_time_from?>">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Days</label>
													<div class="col-lg-9">
														Monday <input type="checkbox" name="day[]" value="Monday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Monday",$day_arr))
																{
																	echo "checked";
																}
																?> >&nbsp;&nbsp;
														Tuesday <input type="checkbox" name="day[]" value="Tuesday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Tuesday",$day_arr))
																{
																	echo "checked";
																}
																?>>&nbsp;&nbsp;&nbsp;&nbsp;
														Wednesday <input type="checkbox" name="day[]" value="Wednesday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Wednesday",$day_arr))
																{
																	echo "checked";
																}
																?>>&nbsp;&nbsp;
														Thursday <input type="checkbox" name="day[]" value="Thursday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Thursday",$day_arr))
																{
																	echo "checked";
																}
																?>>
														Friday <input type="checkbox" name="day[]" value="Friday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Friday",$day_arr))
																{
																	echo "checked";
																}
																?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														Saturday <input type="checkbox" name="day[]" value="Saturday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Saturday",$day_arr))
																{
																	echo "checked";
																}
																?>>&nbsp;&nbsp;&nbsp;&nbsp;
														Sunday <input type="checkbox" name="day[]" value="Sunday" <?php
																$day=$fetch->day;
																$day_arr=explode(",",$day);
																if(in_array("Sunday",$day_arr))
																{
																	echo "checked";
																}
																?>> 
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Notification</label>
													<div class="col-lg-9">
														<textarea  class="form-control" name="notification" value=""><?php echo $fetch->notification?></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hospital Img</label>
													<div class="col-lg-9">
														<input type="file" class="form-control" name="hospital_img" value="{{asset('upload/hospital/'.$fetch->hospital_img)}}">
														<img src="{{asset('upload/hospital/'.$fetch->hospital_img)}}" height="50px" width="50px">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Consulting </label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="consulting_fees" value="<?php echo $fetch->consulting_fees?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Followup Fees</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="followup_fees" value="<?php echo $fetch->followup_fees?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<select class="select" name="state" value="<?php echo $fetch->name?>">
															<option value="">Select</option>
															<?php
															foreach($state_id_arr as $d)
															{
																if($d->id==$fetch->state)
															 	{
															?>
															<option value="<?php echo $d->id;?>"selected>
															<?php echo $d->name ?></option>
															<?php
															    }
																else
                                                                {
															?>
															<option value="<?php echo $d->id;?>" >
															<?php echo $d->name ?></option>
															<?php
															    }
														    }
														    ?>
														</select>
														
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-xl-6">
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<select class="select" name="city" value="<?php echo $fetch->city_name?>">
															<option value="">Select</option>
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
																else
                                                                {
															?>
															<option value="<?php echo $c->id;?>" >
														       <?php echo $c->city_name ?></option>
															<?php
															    }
														    }
														    ?>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<textarea name="address" rows="4" class="form-control" value=""><?php echo $fetch->address?></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
											
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area</label>
													<div class="col-lg-9">
														<select class="select" name="area" value="<?php echo $fetch->area_name?>">
															<option value="">Select</option>
															<?php
															foreach($area_id_arr as $a)
															{
																if($data->id==$fetch->area)
															 	{
															?>
															<option value="<?php echo $a->id;?>"selected>
														       <?php echo $a->area_name ?></option>
															<?php
															    }
																else
                                                                {
															?>
															<option value="<?php echo $a->id;?>">
														       <?php echo $a->area_name ?></option>
															<?php
															    }
														    }
														    ?>
														</select>
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Postal Code</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="pincode" value="<?php echo $fetch->pincode?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Google Map URL</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="google_map" value="<?php echo $fetch->google_map?>">
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>



					
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{url('Backend/assets/js/select2.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-form-horizontal')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
</html>
@endsection