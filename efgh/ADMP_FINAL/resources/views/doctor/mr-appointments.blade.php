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
			<!-- /Breadcrumb --->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								
								@include('doctor/Layout/company-widget');
								
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card card-table">
								<div class="card-body">
								<br><br>
									<!-- Invoice Table -->
									<div class="table-responsive">
										<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>App.Id</th>
													<th>Mr Name</th>
													<th>Slot Time</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											@if(!$mr_appointment_arr->isEmpty())
											   @foreach($mr_appointment_arr as $data)
												<tr>
													<td><?php echo $data->id?></td>
													<td><?php echo $data->first_name?>  <?php echo $data->last_name?></td>
													<td><?php echo $data->start_time?>  to  <?php echo $data->end_time?></td>
													<td class="text-right">
														<div class="table-action">
															<a  href="{{url('mr_appointment_destroy/'.$data->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
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
									<!-- /Invoice Table -->
									
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
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/invoices')}}  30 Nov 2019 04:12:14 GMT -->
</html>
@endsection	