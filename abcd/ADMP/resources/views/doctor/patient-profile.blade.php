@extends('doctor.Layout.main_layout') 	
@section('main_container')
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft">
						
							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
											<?php
													$ptprofile_img=$fetch->ptprofile_img;
													if($ptprofile_img=="null")
													{
												?>
													<a href="#" class="booking-doc-img">
														<img src="{{url('Frontend/assets/img/patients/user.png')}}" alt="User Image">
													</a>
												<?php
													}
													else
													{
												?>
													<a href="#" class="booking-doc-img">
														<img src="{{asset('upload/patient/' . $fetch->ptprofile_img)}}" alt="User Image">
													</a>
												<?php
													}
												?>
											<div class="profile-det-info">
												<h3><?php echo $fetch->name?></h3>
												
												<div class="patient-details">
													<h5><b>Patient ID :</b> PT<?php echo $fetch->patient_id?></h5>
													<h5 class="mb-0"> <?php echo $fetch->email?></h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info">
										<ul>
										<li>Phone <span><?php echo $fetch->mobileno?></span></li>
										<li>Gender<span> <?php echo $fetch->gender?></span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->
							
						
							
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
							<div class="card">
								<div class="card-body pt-0">
									<div class="user-tabs">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Pending Appointments</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#pres" data-toggle="tab"><span>Completed Appointments</span></a>
											</li>
											
										</ul>
									</div>
									<div class="tab-content">
										
										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table id="table" class="table table-hover table-center mb-0">
															<thead>
															<tr>
																<th>Patient</th>
																<th>Appt Date</th>
																<th>Comment</th>
																<th>Status</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
															<?php
																	foreach($patient_appointment_arr as $data1)
																	{
																	?>
																<?php
																	if($data1->appointment_status=="Pending")
																	{
																	?>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																		<?php
																				$ptprofile_img=$data1->ptprofile_img;
																				if($ptprofile_img=="null")
																				{
																			?>
																				<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																					<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/user.png')}}" alt="dammy Image">
																				</a>
																			<?php
																				}
																				else
																				{
																			?>
																				<a href="#" class="avatar avatar-sm mr-2">
																					<img class="avatar-img rounded-circle" src="{{url('upload/patient/'. $data1->ptprofile_img)}}" alt="User Image">
																				</a>
																			<?php
																				}
																			?>
																			<a href="#"><?php echo $data1->name?></a>
																		</h2>
																	</td>
																	<td><?php echo $data1->date?><span class="d-block text-info"><?php echo $data1->time?></span></td>
																	<td><?php echo $data1->comment?> </td>
																	<td><span class="badge badge-pill bg-success-light"><?php echo $data1->appointment_status?></span></td>
															
																	<td class="text-right">
																		<div class="table-action">

																		<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		</div>
																	</td>
																	
																	
																	
																</tr>
																<?php
																	}
																	
																	?>
															<?php
															}
															?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->
										
										<!-- Prescription Tab -->
										<div class="tab-pane fade" id="pres">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table id="table1" class="table table-hover table-center mb-0">
															<thead>
															<tr>
																	<th>Patient</th>
																	<th>Appt Date</th>
																	<th>Comment</th>
																	<th>Status</th>
																	<th></th>
																</tr>     
															</thead>
															<tbody>
															<?php
																	foreach($patient_appointment_arr as $data1)
																	{
																	?>
																<?php
																	if($data1->appointment_status=="Approved")
																	{
																	?>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																		<?php
																				$ptprofile_img=$data1->ptprofile_img;
																				if($ptprofile_img=="null")
																				{
																			?>
																				<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																					<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/user.png')}}" alt="dammy Image">
																				</a>
																			<?php
																				}
																				else
																				{
																			?>
																				<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																					<img class="avatar-img rounded-circle" src="{{url('upload/patient/'. $data1->ptprofile_img)}}" alt="User Image">
																				</a>
																			<?php
																				}
																			?>
																			<a href="{{url('/doctor-profile')}}"><?php echo $data1->name?></a>
																		</h2>
																	</td>
																	<td><?php echo $data1->date?> <span class="d-block text-info"><?php echo $data1->time?></span></td>
																	<td><?php echo $data1->comment?> </td>
																	<td><span class="badge badge-pill bg-success-light"><?php echo $data1->appointment_status?></span></td>
															
																	<td class="text-right">
																		<div class="table-action">

																		<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		</div>
																	</td>
																	
																	
																	
																</tr>
																<?php
																	}
																	
																	?>
															<?php
															}
															?>
																
															</tbody>	
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Prescription Tab -->
			
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{url('Frontend/assets/img/footer-logo.png')}}" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="{{url('/search')}}"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="{{url('/login')}}"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="{{url('/login')}}"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="{{url('/booking')}}"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="{{url('/patient-dashboard')}}"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="{{url('/appointments')}}"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="{{url('/chat')}}"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="{{url('/login')}}"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="{{url('/doctor-register')}}"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="{{url('/doctor-dashboard')}}"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="{{url('/term-condition')}}">Terms and Conditions</a></li>
											<li><a href="{{url('/privacy-policy')}}">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Add Medical Records Modal -->
		<div class="modal fade custom-modal" id="add_medical_records">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">Medical Records</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<form>					
						<div class="modal-body">
							<div class="form-group">
								<label>Date</label>
								<input type="text" class="form-control datetimepicker" value="31-10-2019">
							</div>
							<div class="form-group">
								<label>Description ( Optional )</label>
								<textarea class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>Upload File</label> 
								<input type="file" class="form-control">
							</div>	
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								<button type="button" class="btn btn-secondary submit-btn" data-dismiss="modal">Cancel</button>							
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Medical Records Modal -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{  url('Frontend/assets/js/moment.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/patient-profile')}}  30 Nov 2019 04:12:13 GMT -->
</html>
@endsection	