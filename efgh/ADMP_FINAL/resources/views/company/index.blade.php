@extends('company.Layout.main_layout') 	
@section('main_container')
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Company!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3>{{$total_company_fav_doc}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted"> My Doctors</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<h3>{{$total_manager}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">My Manager</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
					
					
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Appointment List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Apointment Time</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
											@if(!$comp_todayappointment_arr->isEmpty())
											   @foreach($comp_todayappointment_arr as $data)
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('upload/doctor/' . $data->profile_img)}}" alt="User Image"></a>
															<a href="#">Dr.  <?php echo $data->first_name?> <?php echo $data->last_name?></a>
														</h2>
													</td>
													
													<td><?php echo $data->day?><span class="text-primary d-block"><?php echo $data->start_time?> - <?php echo $data->end_time?></span></td>
													<td class="text-right">
														<div class="actions">
															<a  href="{{url('destroy/'.$data->id)}}" class="btn btn-sm bg-danger-light">
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
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<script src="{{url('Backend/assets/plugins/raphael/raphael.min.js')}}"></script>    
		<script src="{{url('Backend/assets/plugins/morris/morris.min.js')}}"></script>  
		<script src="{{url('Backend/assets/js/chart.morris.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>

@endsection