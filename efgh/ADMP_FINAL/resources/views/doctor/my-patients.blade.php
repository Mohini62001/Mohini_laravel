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
									<li class="breadcrumb-item active" aria-current="page">My Patients</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">My Patients</h2>
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
						<input class="form-control" id="myInput" type="text" placeholder="Search..">
							<br>
							<div class="myclass row row-grid">
							<?php
							if(!empty($mypatient))
							{
								foreach($mypatient as $data) 
								{
							?>
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
												<?php
													$ptprofile_img=$data->ptprofile_img;
													if($ptprofile_img=="null")
													{
												?>
													<a href="#" class="booking-doc-img">
														<img src="{{url('Frontend/assets/img/patients/user.png')}}" alt="User Image">
													</a>
												<?php
													}
													else
													{
												?>
													<a href="#" class="booking-doc-img">
														<img src="{{asset('upload/patient/' . $data->ptprofile_img)}}" alt="User Image">
													</a>
												<?php
													}
												?>
													
													<div class="profile-det-info">
														<h3><a href="{{url('doctor-patient-profile/'.$data->patient_id)}}" class="stretched-link"><?php echo $data->name?></a></h3>
														
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT<?php echo $data->patient_id?></h5>
															<h5 class="mb-0"></i> <?php echo $data->email?></h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span><?php echo $data->mobileno?></span></li>
													<li>Gender<span> <?php echo $data->gender?></span></li>
													
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php
								}

							}
							else
							{
								?>
								<?php
								
							}
							?>		
						
								
							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

			<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".myclass .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

   
			
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

<!-- doccure/{{url('/my-patients')}}  30 Nov 2019 04:12:09 GMT -->
</html>
@endsection	