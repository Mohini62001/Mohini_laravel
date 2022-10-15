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
									<li class="breadcrumb-item active" aria-current="page">Find Stockiest</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Find Stockiest</h2>
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
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card card-table">
								<div class="card-body"><br>
									<form action="/doctor-company-find" method="post">
										@csrf
										<div class="row" style="padding-left:15px;">
											<div class="col-xl-4 form-group ">
												<label><h4>Medicine</h4></label>
												<input list="browsers" name="medicine_name" id="browser" class="form-control">
													<datalist value="" id="browsers">
													
														@foreach($all_medicine as $medicine) 		
														<option value={{$medicine->medicine_name}}>
														@if ($errors->has('medicine_name'))
															<span class="text-danger">{{ $errors->first('medicine_name') }}</span>
														@endif
														@endforeach
													
													</datalist>
											</div>
											<div class="col-xl-4 form-group ">
												<label><h4>City</h4></label>
												<input list="browsers1" name="city_name" id="browser1" class="form-control">
													<datalist value="" id="browsers1">
													
														@foreach($city_arr as $city) 		
														<option value={{$city->city_name}}>
														@if ($errors->has('city_name'))
															<span class="text-danger">{{ $errors->first('city_name') }}</span>
														@endif
														@endforeach
													
													</datalist>
											</div>
											<div class="col-xl-4 form-group " style="padding-top:40px;">
												<button type="submit" value="send" name="submit" style="padding-top:10px;" class="btn btn-primary search-btn "><i class="fas fa-search"></i> <span>Search</span></button>
											</div>
										</div>
									</form>
									<!-- Invoice Table --><br><br>
									<div class="table-responsive">
										<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Stockiest ID</th>
													<th>Company Name</th>
													<th>City</th>
													<th>Mobile No</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													@if(!$alltockiest_arr->isEmpty())
												@foreach($alltockiest_arr as $data)
													<td><?php echo $data->id?></td>
													<td><?php echo $data->company_name?></td>
													<td><?php echo $data->city_name?></td>
													<td><?php echo $data->mobile_no?></td>
													<td class="text-right">
														
													</td>
												</tr>
												@endforeach
												@else
													<p class="text-danger mt-2" style="padding-left:400px;">No Stockiest Available</p>
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