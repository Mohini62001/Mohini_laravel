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
									<li class="breadcrumb-item active" aria-current="page">Appointments</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Appointments</h2>
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
						
						<div class="card">
								<div class="card-body pt-0">
								
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Pending Appointments</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#pat_prescriptions" data-toggle="tab">Completed Appointments</a>
											</li>
											
										</ul>
									</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
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
															if(!empty($appointments_arr))
															{
																	foreach($appointments_arr as $data)
																	{
																	?>
																<?php
																	if($data->appointment_status=="Pending")
																	{
																	?>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																		    <?php
																				$ptprofile_img=$data->ptprofile_img;
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
																					<img class="avatar-img rounded-circle" src="{{url('upload/patient/'. $data->ptprofile_img)}}" alt="User Image">
																				</a>
																			<?php
																				}
																			?>
																			<a href="{{url('/doctor-profile')}}"><?php echo $data->name?></a>
																		</h2>
																	</td>
																	<td><?php echo $data->date?> <span class="d-block text-info"><?php echo $data->time?></span></td>
																	<td><?php echo $data->comment?> </td>
																	<td><span class="badge badge-pill bg-success-light"><?php echo $data->appointment_status?></span></td>
															
																	<td class="text-right">
																		<div class="table-action">

																		<a href="{{url('add-prescription/'.$data->id)}}" class="btn btn-sm bg-success-light">
																					<i class="fas fa-plus"></i> Add prescription
																				</a>
																		<a href="{{url('patient_app_delete/'.$data->id)}}" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>-
																		</div>
																	</td>
																	
																	
																	
																</tr>
																<?php
																	}
																	
																	?>
															<?php
															}
														}
														else
														{
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
										<div class="tab-pane fade" id="pat_prescriptions">
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
															if(!empty($appointments_arr))
															{
																	foreach($appointments_arr as $data)
																	{
																	?>
																<?php
																	if($data->appointment_status=="Approved")
																	{
																	?>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																		<?php
																				$ptprofile_img=$data->ptprofile_img;
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
																					<img class="avatar-img rounded-circle" src="{{url('upload/patient/'. $data->ptprofile_img)}}" alt="User Image">
																				</a>
																			<?php
																				}
																			?>
																			<a href="{{url('/doctor-profile')}}"><?php echo $data->name?></a>
																		</h2>
																	</td>
																	<td><?php echo $data->date?> <span class="d-block text-info"><?php echo $data->time?></span></td>
																	<td><?php echo $data->comment?> </td>
																	<td><span class="badge badge-pill bg-success-light"><?php echo $data->appointment_status?></span></td>
															
																	<td class="text-right">
																		<div class="table-action">

																		<a href="{{url('dtbill_view/'.$data->id)}}" class="btn btn-sm bg-info-light" >
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
														}
														else
														{
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
									</div>	<!-- /Prescription Tab -->
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			
   
			
		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Appointment Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="info-details">
							<li>
								<div class="details-header">
									<div class="row">
										<div class="col-md-6">
											<span class="title">#APT0001</span>
											<span class="text">21 Oct 2019 10:00 AM</span>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<span class="title">Status:</span>
								<span class="text">Completed</span>
							</li>
							<li>
								<span class="title">Confirm Date:</span>
								<span class="text">29 Jun 2019</span>
							</li>
							<li>
								<span class="title">Paid Amount</span>
								<span class="text">$450</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
	  
		
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/appointments')}}  30 Nov 2019 04:12:09 GMT -->
</html>
@endsection	