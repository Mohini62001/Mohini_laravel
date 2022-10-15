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
									<li class="breadcrumb-item active" aria-current="page">Medicine</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">My Medicines</h2>
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
							<div class="card card-table">
								<div class="card-body">
								<div class="row p-3">
									<div class="col-md-6 col-lg-6">
										<h4>Add Medicines Form-list</h4>
										@if(session()->has('success'))
								            <i class="alert alert-success">{{session('success')}}</i>
							            @endif
										<form action="{{url('/addlistmedicine')}}" method="post" enctype="multipart/form-data">
											@csrf
										<div class="form-group">
											<label>Medicines</label>
											<select class="col-lg-9 form-control" name="medicine_name">
											<option value="">Select</option>
												<?php
												foreach($medicine_arr as $data)
												{
												?>
												<option value="<?php echo $data->medicine_name;?>">
														<?php echo $data->medicine_name ?></option>
												<?php
												}
												?>			
											</select>
											@if ($errors->has('medicine_name'))
            									<span class="text-danger">{{ $errors->first('medicine_name') }}</span>
       										@endif
										</div>
										<div class="text-right">
											<button type="submit" style="margin-right:125px" class="btn btn-primary" name="submit" value="Send">Submit</button>
										</div>
										</form>
									</div>
									<div class="col-md-6 col-lg-6">
										<h4>Add Medicines </h4>
										@if(session()->has('succes'))
								            <i class="alert alert-success">{{session('succes')}}</i>
							            @endif
										<form action="{{url('/addmedicine')}}" method="post" enctype="multipart/form-data">
											@csrf
										<div class="form-group col-lg-9">
											<label>Medicine </label>
											<input type="text" class="form-control" name="medicine_name1" placeholder="">
											@if ($errors->has('medicine_name1'))
            									<span class="text-danger">{{ $errors->first('medicine_name1') }}</span>
       										@endif
										</div>
										<div class="text-right">
											<button type="submit" style="margin-right:145px" class="btn btn-primary" name="submit" value="Send">Submit</button>
										</div>
										</form>
									</div>
								</div>
								</div>
								<hr>
								@if(session()->has('suc'))
									<i class="alert alert-success">{{session('suc')}}</i>
								@endif
								<div class="table-responsive p-3">
												<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Medicine ID</th>
													<th>Medicine Name</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
											 @if(!$medi_arr->isEmpty())
											   @foreach($medi_arr as $fetch)
												<tr>
													<td><?php echo $fetch->id?></td>
													<td><?php echo $fetch->medicine_name?></td>
													<td class="text-right">
														<div class="actions">
															<a  href="{{url('doctor-my-medicine/'. $fetch->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												@endforeach
												@else
													<p class="text-danger mt-2">No Medicines Available</p>
												@endif
												
												
												
												
											</tbody>
										</table>
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