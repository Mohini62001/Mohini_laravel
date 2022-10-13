@extends('manager.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/manager-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
								
							</div>
							@if(session()->has('success'))
												
									<i class="alert alert-success">{{session('success')}}</i>
												
								@endif
						</div>
						
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="table" class=" table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor ID</th>
													<th>Profile Img</th>
													<th>Specialist</th>
													<th>First Name</th>
													<th>Last Name</th>
												   <th class="text-right">Actions</th>
													
													
												</tr>
											</thead>
											<tbody>
												@if(!$alldoctor_arr->isEmpty())
											   @foreach($alldoctor_arr as $data)
												<tr>
												<td><?php echo $data->id?></td>
												<td><img src="{{asset('upload/doctor/' . $data->profile_img)}}" height="50px" width="50px"/></td>
												<td><?php echo $data->name?></td>
												<td><?php echo $data->first_name?></td>
												<td><?php echo $data->last_name?></td>
												<td class="text-right">
													<div class="actions">	
														<a href="{{url('manager-doctor-profile/'.$data->id)}}" class="btn btn-sm bg-success-light" >
															View Profile
														</a>
													</div>
												</td>
												
												</tr>
												@endforeach
												@else
													<p class="text-danger mt-2">No Doctors Available</p>
												@endif	
													
											</tbody>
										</table>
									</div>
								</div>
							</div>
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-doctor-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
@endsection