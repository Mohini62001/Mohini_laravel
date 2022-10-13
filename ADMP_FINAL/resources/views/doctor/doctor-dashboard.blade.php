@extends('doctor.Layout.main_layout') 	
@section('main_container')
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/doctor-dashboard')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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

							<div class="row">
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
															<div class="circle-graph1" data-percent="75">
																<img src="{{url('Frontend/assets/img/icon-01.png')}}" class="img-fluid" alt="patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>My Patient</h6>
															<h3>{{$total_fav_patient}}</h3>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="{{url('Frontend/assets/img/icon-02.png')}}" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Today Patient</h6>
															<h3>
															<?php
															if(!empty($appointments_arr))
															{
																echo count($appointments_arr);
															}
															else
															{
																echo "0";
															}
															
															?>
															
															</h3>
															<p class="text-muted">
																<?php
																echo date('d - m -y');
																?>
															</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="{{url('Frontend/assets/img/icon-03.png')}}" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Appoinments</h6>
															<h3>{{$total_appointment}}</h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4">Patient Appoinment</h4>
									<div class="appointment-tab">
									
										<!-- Appointment Tab -->
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
											<li class="nav-item">
												<a class="nav-link active" href="#today-appointments" data-toggle="tab">Today</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#upcomming-appointments" data-toggle="tab">Upcomming</a>
											</li>
											 
										</ul>
										<!-- /Appointment Tab -->
										
										<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="today-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table id="table" class="table table-hover table-center mb-0">
																<thead>
																	
																	<tr>
																		<th>Patient Name</th>
																		<th>Gender</th>
																		<th>Appt Date</th>
																		<th>Mobile No</th>
																		<th class="text-center">Add Prescription</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																   @if(!$appointments_arr->isEmpty())
											   						@foreach($appointments_arr as $data)
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
																				<a href="{{url('/patient-profile')}}"><?php echo $data->name?><span>#PT{{$data->patient_id}}</span></a>
																			</h2>
																		</td>
																		<td><?php echo $data->gender?></td>
																		<td><?php echo $data->date?> <span class="d-block text-info">Time : <?php echo $data->time?></span></td>
																		<td><?php echo $data->mobileno?></td>
																		<td class="text-right">
																			<div class="table-action">			
																				<a href="{{url('add-prescription/'.$data->id)}}" class="btn btn-sm bg-success-light">
																					<i class="fas fa-plus"></i> Add prescription
																				</a>
																				
																			</div>
																		</td>
																	</tr>
																	@endforeach
																	@else
																		<p class="text-danger mt-2" style="padding-left:400px;">No Appointments Available</p>
																	@endif
																	
																	
																	
																</tbody>
															</table>		
														</div>
													</div>
												</div>
											</div>
											<!-- /Upcoming Appointment Tab -->
									   
											<!-- Today Appointment Tab -->
											<div class="tab-pane" id="upcomming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
														<table id="table1" class="table table-hover table-center mb-0">
																<thead>
																	
																	<tr>
																		<th>Patient Name</th>
																		<th>Gender</th>
																		<th>Appt Date</th>
																		<th>Mobile No</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																
																	@if(!$appointments_upc_arr->isEmpty())
											   						@foreach($appointments_upc_arr as $data)
																	<tr>
																		<td>
																			<h2 class="table-avatar">

																			<?php
																				$ptprofile_img=$data->ptprofile_img;
																				if($ptprofile_img=="null")
																				{
																				?>
																				<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/user.png')}}" alt="dammy Image">
																				</a>
																				<?php
																				}
																				else
																				{
																				?>
																				<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('upload/patient/'. $data->ptprofile_img)}}" alt="User Image"></a>
																				<?php
																				}
																				?>
																				
																				<a href="{{url('/patient-profile')}}"><?php echo $data->name?><span>#PT{{$data->patient_id}}</span></a>
																			</h2>
																		</td>
																		<td><?php echo $data->gender?></td>
																		<td><?php echo $data->date?> <span class="d-block text-info">Time : <?php echo $data->time?></span></td>
																		<td><?php echo $data->mobileno?></td>
																		
																	</tr>
																	@endforeach
																	@else
																		<p class="text-danger mt-2" style="padding-left:400px;">No Appointments Available</p>
																	@endif
																	
																	
																	
																</tbody>
															</table>		
														</div>	
													</div>	
												</div>	
											</div>
											<!-- /Today Appointment Tab -->
											
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
		</div>
		<!-- /Main Wrapper -->
	  
		
		<!-- Bootstrap Core JS -->
		<script src="{{ url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{ url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{ url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{ url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Circle Progress JS -->
		<script src="{{ url('Frontend/assets/js/circle-progress.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/doctor-dashboard')}}  30 Nov 2019 04:12:09 GMT -->
</html>
@endsection	