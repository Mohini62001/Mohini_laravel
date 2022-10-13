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
									<li class="breadcrumb-item active" aria-current="page">Pharama Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Pharama Dashboard</h2>
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
								
		
								@include('doctor/Layout/company-widget');
							
							</div>
							<!-- /Profile Sidebar --->
							
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
																<img src="{{url('Frontend/assets/img/icon-03.png')}}" class="img-fluid" alt="patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>MR Appoinments</h6>
															<h3>{{$total_mr_appointment}}</h3>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="{{url('Frontend/assets/img/icon-03.png')}}" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Manager Appoinments</h6>
															<h3>{{$total_manager_appointment}}</h3>
															
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
															<h6>Company Appoinments</h6>
															<h3>{{$total_company_appointment}}</h3>
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
												<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">	MR </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#today-appointments" data-toggle="tab">Manager</a>
											</li> 
											<li class="nav-item">
												<a class="nav-link" href="#today-appointments1" data-toggle="tab">Company</a>
											</li> 
										</ul>
										<!-- /Appointment Tab -->
										
										<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="upcoming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body"><br>
														<div class="table-responsive">
															<table id="table" class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>App.Id</th>
																		<th>MR Name</th>
																		<th>Slot Time</th>
																	</tr>
																</thead>
																<tbody>
																@if(!$mrapp_arr->isEmpty())
																@foreach($mrapp_arr as $data2)
																	<tr>
																		<td><?php echo $data2->id?></td>
																		<td><?php echo $data2->first_name?>  <?php echo $data2->last_name?></td>
																		<td><?php echo $data2->start_time?>  to  <?php echo $data2->end_time?></td>
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
											<div class="tab-pane" id="today-appointments">
												<div class="card card-table mb-0">
													<div class="card-body"><br>
														<div class="table-responsive">
															<table id="table1" class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>App.Id</th>
																		<th>Manager Name</th>
																		<th>Slot Time</th>
																	</tr>
																</thead>
																<tbody>
																@if(!$managerapp_arr->isEmpty())
																@foreach($managerapp_arr as $data1)
																<tr>
																	<td><?php echo $data1->id?></td>
																	<td><?php echo $data1->Manager_name?></td>
																	<td><?php echo $data1->start_time?>  to  <?php echo $data1->end_time?></td>
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

											<!-- Today Appointment Tab -->
											<div class="tab-pane" id="today-appointments1">
												<div class="card card-table mb-0">
													<div class="card-body"><br>
													<div class="table-responsive">
													<table id="table2" class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>App.Id</th>
																<th>Company Name</th>
																<th>Slot Time</th>
																
															</tr>
														</thead>
														<tbody>
														@if(!$companyapp_arr->isEmpty())
														@foreach($companyapp_arr as $data)
															<tr>
																<td><?php echo $data->id?></td>
																<td><?php echo $data->company_name?></td>
																<td><?php echo $data->start_time?>  to  <?php echo $data->end_time?></td>
																
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