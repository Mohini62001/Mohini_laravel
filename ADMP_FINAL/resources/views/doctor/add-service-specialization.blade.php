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
									<li class="breadcrumb-item active" aria-current="page">Social Media</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Social Media</h2>
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
								<div class="card-body">
								
									<!-- Social Form -->
									   
									                                                                                       
										<div class="row">
										 	<div class="col-md-6 col-lg-6">
												<h4 class="card-title">Add Services</h4>
												<form action="{{url('/addservice')}}" method="post" enctype="multipart/form-data"> 
												@csrf
													<div class="form-group">
														<label>Service </label>
														<input type="text" class="form-control" name="service" placeholder="Tooth cleaning">
														@if ($errors->has('service'))
            												<span class="text-danger">{{ $errors->first('service') }}</span>
       													@endif
													</div>
													<div class="submit-section">
														<button type="submit" class="btn btn-primary submit-btn" name="submit" value="send">Add Service</button>
													</div>
												</form>
												<hr>
												@if(session()->has('success'))
													<i class="alert alert-success">{{session('success')}}</i>
												@endif
												<div class="table-responsive">
													<table class="datatable table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>ID</th>
																<th>Service Name</th>
																<th class="text-right">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!$service_arr->isEmpty())
											   				@foreach($service_arr as $data)
															<tr>
																<td><?php echo $data->id?></td>
																<td><?php echo $data->title?></td>
																<td class="text-right">
																	<div class="actions">
																		<a  href="{{url('addservice/'. $data->id)}}" class="btn btn-sm bg-danger-light">
																			<i class="fe fe-trash"></i> Delete
																		</a>
																	</div>
																</td>
															</tr>
															@endforeach
															@else
																<p class="text-danger mt-2">No Service Available</p>
															@endif
														</tbody>
													</table>
												</div>
											</div>

											<div class="col-md-6 col-lg-6">
												<h4 class="card-title">Add Specializations</h4>
												<form action="{{url('/addspecialitie')}}" method="post" enctype="multipart/form-data">
													@csrf
													<div class="form-group">
														<label>Specialization</label>
														<input type="text" class="form-control" name="specialization" placeholder="Oral and Maxillofacial Surgery">
														@if ($errors->has('specialization'))
            												<span class="text-danger">{{ $errors->first('specialization') }}</span>
       													@endif
													</div>
													<div class="submit-section">
														<button type="submit" class="btn btn-primary submit-btn" name="submit" value="send">Add Specialities</button>
													</div>
												</form>	
												<hr>
												@if(session()->has('succes'))
													
													<i class="alert alert-success">{{session('succes')}}</i>
													
												@endif
												<div class="table-responsive">
													<table class="datatable table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>ID</th>
																<th>Specialities Name</th>
																<th class="text-right">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!$special_arr->isEmpty())
											  				@foreach($special_arr as $data1)
															<tr>
																<td><?php echo $data1->id?></td>
																<td><?php echo $data1->title?></td>
																<td class="text-right">
																	<div class="actions">
																		<a  href="{{url('addspecialitie/'. $data1->id)}}" class="btn btn-sm bg-danger-light">
																			<i class="fe fe-trash"></i> Delete
																		</a>
																	</div>
																</td>
															</tr>
															@endforeach
															@else
																<p class="text-danger mt-2">No Speciality Available</p>
															@endif
														</tbody>
													</table>
												</div>
											</div>

										</div>
										
										
										
										
										
										
									
									<!-- /Social Form -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/social-media.html  30 Nov 2019 04:12:36 GMT -->
</html>
@endsection	