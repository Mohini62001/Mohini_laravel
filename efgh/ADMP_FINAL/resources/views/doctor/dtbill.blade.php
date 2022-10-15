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
									<li class="breadcrumb-item active" aria-current="page">Invoice View</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Invoice View</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="invoice-content">
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-logo">
												<img src="{{url('Frontend/assets/img/logo.png')}}" alt="logo">
											</div>
										</div>
										<div class="col-md-6">
											<p class="invoice-details">
												<strong>Appointment id : {{$app_data->id}}</strong> <br>
												<strong>Issued:</strong> {{$app_data->date}}
											</p>
										</div>
									</div>
								</div>
								
								<!-- Invoice Item -->
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-info">
												<strong class="customer-text">Invoice From</strong>
												<p class="invoice-details invoice-details-two">
												
													
													Dr. {{$doctor_data->first_name}} {{$doctor_data->last_name}} <br>
													{{$doctor_data->address}},<br>
													{{$doctor_data->city}}, {{$doctor_data->state}} <br>
													
															
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="invoice-info invoice-info2">
												<strong class="customer-text">Invoice To</strong>
												<p class="invoice-details">
													{{$patient_data->name}} <br>
													{{$patient_data->email}}<br>
													{{$patient_data->mobileno}}<br>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->
								<br>
								<br>
								<!-- Invoice Item -->
								<div class="invoice-item invoice-table-wrap">
									<div class="row">
										<div class="col-md-12">
											<strong>Patient Reports and Diagnosis</strong>
											<br>
											<br>
											<div class="table-responsive">
												<table class="invoice-table table table-bordered">
													<thead>
														<tr>
															<th class="text-center">problems</th>
															<th class="text-center">diagnosis</th>
															<th class="text-center">care suggestion</th>
															<th class="text-center">reports</th>
														</tr>
													</thead>
													<tbody>
													@if(!$diagnoses_data->isEmpty())
															@foreach($diagnoses_data as $diagnoses_data)
														<tr>
															<td class="text-center">{{$diagnoses_data->problems}}</td>
															<td class="text-center">{{$diagnoses_data->diagnosis}}</td>
															<td class="text-center">{{$diagnoses_data->care_suggestion}}</td>
															<td class="text-center">{{$diagnoses_data->reports}}</td>
														</tr>
														@endforeach
														@else
														<p class="text-danger mt-2">No data added</p>
														@endif
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->
								<br>
								<br>
								<!-- Invoice Item -->
								<div class="invoice-item invoice-table-wrap">
									<div class="row">
										<div class="col-md-12">
											<strong>Patient Reports and Diagnosis</strong>
											<br>
											<br>
											<div class="table-responsive">
												<table class="invoice-table table table-bordered">	
													<thead>
														<tr>
															<th class="text-center">medicine name</th>
															<th class="text-center">medicine Quantity</th>
															<th class="text-center">medicine take Days</th>
															<th class="text-center">medicine take Time</th>
															<th class="text-center">medicine dose</th>
														</tr>
													</thead>
													<tbody>
													@if(!$prescriptions_data->isEmpty())
															@foreach($prescriptions_data as $prescriptions_data)
														<tr>
															<td class="text-center">{{$prescriptions_data->medicine_name}}</td>
															<td class="text-center">{{$prescriptions_data->medicine_Quantity}}</td>
															<td class="text-center">{{$prescriptions_data->medicine_take_Days}}</td>
															<td class="text-center">{{$prescriptions_data->medicine_take_Time}}</td>
															<td class="text-center">{{$prescriptions_data->medicine_dose}}</td>
														</tr>
														@endforeach
														@else
														<p class="text-danger mt-2">No data added</p>
														@endif
													</tbody>
												</table>
											</div><br><br>
											@if($app_data->report_img==Null)
											@else
											<div class="clinic-details">
													<p class="doc-location"> <b>Reports</b></p>
													<ul class="clinic-gallery">
													<?php
														$report_img=$app_data->report_img;
														$report_img=explode(",",$report_img);
								
														foreach($report_img as $data)
														{
														?>
														<li>
															<a href="{{asset('upload/patient/patient_report/'.$data)}}" data-fancybox="gallery">
																<img src="{{asset('upload/patient/patient_report/'.$data)}}" style="height:50px;width:50px;" alt="Feature">
															</a>
														</li>
														<?php
														}
														?>
													</ul>
											</div>
											@endif
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			<div class="container" id="box">
			
				<div class="row well">     

					<center>
					<a class="btn btn-primary" href="{{url('/doctor-appointments')}}" role="button">Back</a>
						<button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
					</center>
					<br>
					<br>
					<br>
					<br>
					
				</div>
			</div>
   <script>
	 function myFunction() {
        window.print();
    }
   </script>
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/invoice-view')}}  30 Nov 2019 04:12:20 GMT -->
</html>
@endsection	