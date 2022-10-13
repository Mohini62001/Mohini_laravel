@extends('patient.Layout.main_layout')
@section('main_container')

<script>
setInterval(refresh,290000);
function refresh()
{
	history.go(-1);
}
</script>

<!-- Breadcrumb --->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">Appointment</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->

<div class="content">
	<div class="container">

		<div class="row">
        

            <div class="col-md-4 col-lg-4">
				<div class="card">
					<div class="card-body">

						<!-- Checkout Form -->
						
							<!-- Personal Information -->
                        <form action="{{url('/book_by_otp')}}" enctype="multipart/form-data" method="post" >
			            	@csrf
							<div class="info-widget">
								<h4 class="card-title">Personal Information</h4>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group card-label">
											<label>Name</label>
											<input class="form-control" type="text" name="name" value="<?php echo $patient_data->name ?>" readonly>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group card-label">
											<label>Email</label>
											<input class="form-control" type="email" name="email" value="<?php echo $patient_data->email ?>" readonly>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group card-label">
											<label>Phone</label>
											<input class="form-control" type="text"value="<?php echo $patient_data->mobileno ?>" readonly>
										</div>
									</div>
                                    
                                    <div class="col-md-12 col-sm-12">
										<div class="form-group card-label">
											<label>Comment</label>
											<textarea class="form-control" type="text" name="comment" ></textarea>
										</div>
									</div>
									<div class="clinic-booking">
										<input type="submit" class="doc-slot-list" value="Book Appointment"/>	
									</div>
								</div>
							</div>
						</form>	
							<!-- /Personal Information -->

					</div>
				</div>

			</div>

			<div class="col-md-8 col-lg-8 theiaStickySidebar">

				<!-- Booking Summary -->
				<div class="card">
                    
						<div class="card-body">
                        <h4 class="card-title">Booking Summary</h4>
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
										<img src="{{asset('upload/doctor/' . $doctor_data->profile_img)}}" width="100%" height="150px" alt="User Image">
									</div>
									<div class="doc-info-cont">
										<h4 class="doc-name">Dr. <?php echo $doctor_data->first_name?> <?php echo $doctor_data->last_name?></h4>
										<p class="doc-speciality"><?php echo $doctor_data->short_tittle?></p>
										<p class="far fa-hospital">&nbsp;&nbsp;<?php echo $doctor_data->hospital_name?></p><br>
										<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<?php echo $doctor_data->address?>
										
										
									</div>
								</div>
								<div class="doc-info-right">
									<div class="clini-infos">
										<ul>
											
                                            
											<li><i class="far fa-money-bill-alt"></i> Consulting Fees: <?php echo $doctor_data->consulting_fees?></li>
											<li><i class="far fa-money-bill-alt"></i> Followup Fees: <?php echo $doctor_data->followup_fees?></li>
											<br>
											<span><b>Appointment:-</b></span>
											<li><i class=""></i>  Date: {{$appointment_date}}</li>
											<li><i class=""></i>  Time: {{$slot_timing}}</li>
										</ul>
									</div>
									
									
									
								</div>
							</div>
						</div>
                        
					</div>
					<!-- /Doctor Widget -->
				<!-- /Booking Summary -->
                
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

<!-- doccure/{{url('/checkout')}}  30 Nov 2019 04:12:16 GMT -->

</html>

@endsection