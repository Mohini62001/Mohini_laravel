@extends('patient.Layout.main_layout') 	
@section('main_container')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>		
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								
								<div class="filter-widget">
									<label>State</label>
									<select class="col-lg-11 form-control select" id="sid" value="" name="sid">
										<option value="">Select State</option>
										<?php
										foreach($state_id_arr as $d)
										{
										?>
										<option value="<?php echo $d->id;?>">
												<?php echo $d->state_name ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="filter-widget">
									<label>City</label>
									<select class="col-lg-11 form-control select" id="city_id" value="" name="city_id">
									</select>
								</div>
								<div class="filter-widget">
									<label>Area</label>
									<select class="col-lg-11 form-control select"  id="area_id" value="" name="area_id">
									</select>
								</div>
								<div class="filter-widget">
									<label>Specialist</label>
									<select class="col-lg-11 form-control select" value="" name="specialist_id">
										<option value="">Select Specialist</option>
										<?php
										foreach($special_id_arr as $data)
										{
										?>
										<option value="<?php echo $data->id;?>">
											<?php echo $data->name ?></option>
										<?php
										}
										?>
									</select>
								</div>

									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>	
								</div>
							</div>
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">

						<table id="table" class="table table-hover table-center mb-0" >
						<thead>
							<tr>
								<td></td>
							</tr>
						</thead>
						<tbody>
						<?php
						foreach($doctorlist_arr as $data)
						{
						?>
						<tr>
							<td>
							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="{{url('/doctor-profile')}}">
													<img src="{{asset('upload/doctor/' . $data->profile_img)}}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="{{url('/doctor-profile')}}">Dr. <?php echo $data->first_name?> <?php echo $data->last_name?></a></h4>
												<p class="doc-speciality"><?php echo $data->short_tittle?></p>
												<h5 class="doc-department"><img src="{{asset('upload/specialities/' . $data->img)}}" class="img-fluid" alt="Speciality"><?php echo $data->name?></h5>
												
												<div class="clinic-details">
													<p class="doc-location"><i class="far fa-hospital"></i> <?php echo $data->hospital_name?></p>
													<ul class="clinic-gallery">
													<?php
														$hospital_img=$data->hospital_img;
														$hosp_img_arr=explode(",",$hospital_img);
								
														foreach($hosp_img_arr as $d)
														{
														?>
														<li>
															<a href="{{asset('upload/hospital/'.$d)}}" data-fancybox="gallery">
																<img src="{{asset('upload/hospital/'.$d)}}" style="height:50px;width:50px;" alt="Feature">
															</a>
														</li>
														<?php
														}
														?>
													</ul>
												</div>
												
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="fas fa-map-marker-alt"></i> <?php echo $data->address?></li>
													<li><i class="far fa-money-bill-alt"></i> Consulting Fees: <?php echo $data->consulting_fees?>  </li>
													<li><i class="far fa-money-bill-alt"></i> Followup Fees: <?php echo $data->followup_fees?>  </li>
												
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('doctor-profile/'.$data->id)}}">View Profile</a>
												<a class="apt-btn" href="{{url('/booking/'.$data->id)}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							</td>
						</tr>
							<?php
							}
							?>
							</tbody>
							</table>
							<br>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			<script>
$('#sid').on('change', function () {
                var sid = this.value;
                $('#city_id').html('');
                $.ajax({
				url:"{{url('/getdtCity')}}",
				type: "POST",
				data: {
				sid: sid,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#city_id').html('<option value="">Select City</option>');
                        $.each(result.cities, function (key, value) {
                            $('#city_id').append('<option value="' + value.id + '">' + value.city_name + '</option>');
                        });
                        
                    }
                });
            });
			
$('#city_id').on('change', function () {
                var city_id = this.value;
                $('#area_id').html('');
                $.ajax({
				url:"{{url('/getdtArea')}}",
				type: "POST",
				data: {
				city_id: city_id,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#area_id').html('<option value="">Select Area</option>');
                        $.each(result.areas, function (key, value) {
                            $('#area_id').append('<option value="' + value.id + '">' + value.area_name + '</option>');
                        });
                        
                    }
                });
            });			
</script>			
			

		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Select2 JS -->
		<script src="{{  url('Frontend/assets/plugins/select2/js/select2.min.js') }}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{  url('Frontend/assets/js/moment.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
		
		<!-- Fancybox JS -->
		<script src="{{  url('Frontend/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

</html>
@endsection	