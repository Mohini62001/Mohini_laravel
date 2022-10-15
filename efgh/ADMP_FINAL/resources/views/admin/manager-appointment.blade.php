@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Manager Name</th>
													<th>Apointment Time</th>
													<th>Status</th>
													<th class="text-right"></th>
												</tr>
											</thead>
											<tbody>
											@if(!$all_managerappointment_arr->isEmpty())
												@foreach($all_managerappointment_arr as $data)
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#">Dr. <?php echo $data->first_name?> <?php echo $data->last_name?></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#"><?php echo $data->Manager_name?></a>
														</h2>
													</td>
													<td><?php echo $data->day?> <span class="text-primary d-block"><?php echo $data->start_time?> - <?php echo $data->end_time?></span></td>
													<td><span class="badge badge-pill bg-success-light"></span></td>
													<td class="text-right">
														
													</td>
												</tr>
												@endforeach
												@else
													<p class="text-danger mt-2">No Appointments Available</p>
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
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{url('Backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('Backend/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-appointment-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>
@endsection