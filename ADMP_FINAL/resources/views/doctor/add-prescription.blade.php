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
									<li class="breadcrumb-item active" aria-current="page">Add Prescription</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Add Prescription</h2>
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
						
							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
										<?php
											$ptprofile_img=$pdata->ptprofile_img;
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
												<img src="{{asset('upload/patient/' . $pdata->ptprofile_img)}}" alt="User Image">
											</a>
										<?php
											}
										?>
											
											<div class="profile-det-info">
												<h3><a href="{{url('/patient-profile')}}"><?php echo $pdata->name?> </a></h3>
												<div class="patient-details">
													<h5><b>Patient ID :</b> <?php echo $pdata->id?></h5>
													<h5 class="mb-0"><i class="fas fa-map-email-alt"></i><?php echo $pdata->email?></h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info">
										<ul>
											<li>Phone <span><?php echo $pdata->mobileno?></span></li>
											<li>Gender <span> <?php echo $pdata->gender?></span></li>
											
										</ul>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->
							
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-header">
								
												<h4 class="card-title mb-0">Add Prescription</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="biller-info">
												<h4 class="d-block">Dr. {{Session('drname')}}</h4>
												<span class="d-block text-sm text-muted">{{Session('address')}}</span>
											</div>
										</div>
										<div class="col-sm-6 text-sm-right">
											<div class="billing-info">
												<h4 class="d-block">Date : <?php echo (new DateTime())->format('d-m-Y'); ?></h4>
												<span class="d-block text-muted">Appointment id : {{$app_data->id}}</span>
											</div>
										</div>
									</div>
									
									
<div id="accordion">
	<form action="{{url('/add-prescription/'.$app_data->id)}}" method="post" enctype="multipart/form-data"> 
	@csrf
    <div class="card">
			<div class="card-header">
				<a class="btn" data-bs-toggle="collapse" href="#collapseOne">
					<b>Add diagnosis reports</b>
				</a>
			</div>
			<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
			<div class="card card-table">
			<div class="table-responsive">
												<table class="table table-hover table-center">
													<thead>
														<tr>
															<th style="min-width: 200px">Problems</th>
															<th style="min-width: 100px">Diagnosis</th>
															<th style="min-width: 100px">care suggestions</th>
															<th style="min-width: 100px;">reports</th>
															<th style="min-width: 80px;"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<textarea class="form-control" placeholder="Write Patient Problems" name="problems"></textarea>
																@if ($errors->has('problems'))
																	<span class="text-danger">{{ $errors->first('problems') }}</span>
																@endif
															</td>
															<td>
															<textarea class="form-control" placeholder="Write Patient Diagnosis" name="diagnosis"></textarea>
															@if ($errors->has('diagnosis'))
																	<span class="text-danger">{{ $errors->first('diagnosis') }}</span>
															@endif
															</td>
															<td>
															<textarea class="form-control" placeholder="Write Patient Care suggestions" name="care_suggestion"></textarea>
															@if ($errors->has('care_suggestion'))
																	<span class="text-danger">{{ $errors->first('care_suggestion') }}</span>
															@endif
															</td>
															<td>
															<textarea class="form-control" placeholder="Write Patient Reports Suggestions" name="reports"></textarea>
															@if ($errors->has('reports'))
																	<span class="text-danger">{{ $errors->first('reports') }}</span>
															@endif
															</td>
															<input type="hidden" value="<?php echo $app_data->id?>" name="appoinment_id" id="appoinment_id">
															<input type="hidden" value="<?php echo $app_data->patient_id?>" name="patient_id" id="patient_id">
															<td>
																<button name="submit" value="send" class="btn btn-sm bg-success-light"><i class="fas fa-plus">Add</i></button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
													<table class="datatable table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Problems</th>
																<th>Diagnosis</th>
																<th>care suggestions</th>
																<th>reports</th>
															</tr>
														</thead>
														<tbody>
														
														@if(!$pdiagnoses->isEmpty())
															@foreach($pdiagnoses as $pdiagnoses1) 		
															<tr>
																<td>{{$pdiagnoses1->problems}}</td>
																<td>{{$pdiagnoses1->diagnosis}}</td>
																<td>{{$pdiagnoses1->care_suggestion}}</td>
																<td>{{$pdiagnoses1->reports}}</td>
																<td class="text-right">
																	<div class="actions">
																		<a  href="" class="btn btn-sm bg-danger-light">
																			<i class="fe fe-trash"></i> Delete
																		</a>
																	</div>
																</td>
															</tr>
														@endforeach
														@else
														<tr>
															<td class="text-danger" colspan="5" align="center"> Data Not Found </td>
														</tr>
														@endif	
														</tbody>
													</table>
												</div>
										</div>
									</div>								
    </div>
</form>
  </div>

  <form action="{{url('/prescription_store/'.$app_data->id)}}" method="post" enctype="multipart/form-data"> 
	@csrf
  <div class="card">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
        <b>Add Prescription</b>
      </a>
    </div>  
   
	<div class="card-body">
											<div class="table-responsive">
												<table class="table table-hover table-center">
													<thead>
														<tr>
															<th style="min-width: 100px"> Medicine Name</th>
															<th style="min-width: 100px">Quantity</th>
															<th style="min-width: 100px">Days</th>
															<th style="min-width: 100px;">Time</th>
															<th style="min-width: 120px;">Dose</th>
															<th style="min-width: 80px;"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
															<input list="browsers" name="medicine_name" id="browser" class="form-control">
															<datalist value="" id="browsers">
															@if(!$doc_fav_medicine->isEmpty())
																@foreach($doc_fav_medicine as $medicine) 		
																<option value={{$medicine->medicine_name}}>
																@if ($errors->has('medicine_name'))
																	<span class="text-danger">{{ $errors->first('medicine_name') }}</span>
																@endif
																@endforeach
															@endif
															</datalist>
															</td>
															<td>
																<input class="form-control" placeholder="" type="text" name="medicine_Quantity">
																@if ($errors->has('medicine_Quantity'))
																	<span class="text-danger">{{ $errors->first('medicine_Quantity') }}</span>
																@endif
															</td>
															<td>
																<input class="form-control" placeholder="" type="text" name="medicine_take_Days">
																@if ($errors->has('medicine_take_Days'))
																	<span class="text-danger">{{ $errors->first('medicine_take_Days') }}</span>
																@endif
															</td>
															<td>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox" name="medicine_take_Time[]" value="Morning"> Morning
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox" name="medicine_take_Time[]"  value="Afternoon"> Afternoon
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox" name="medicine_take_Time[]" value="Evening"> Evening
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox" name="medicine_take_Time[]" value="Night"> Night
																	</label>
																</div>
																</td>
																<td>
																<div class="form-group">               
															<select class="select form-control" name="medicine_dose">
																<option selected="selected" value="">---Dose---</option>
																<option value="Monday">Injection</option>
																<option value="Tuesday">Eye Drop</option> 
															</select>
														</div>
															</td>
															<input type="hidden" value="<?php echo $app_data->id?>" name="appoinment_id" id="appoinment_id">
															<input type="hidden" value="<?php echo $app_data->patient_id?>" name="patient_id" id="patient_id">
															<td>
															<button name="submit" value="send" class="btn btn-sm bg-success-light"><i class="fas fa-plus">Add</i></button>
															
															</td>
														</tr>
													</tbody>
												</table>
												<div class="table-responsive">
													<table class="datatable table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Medicine Name</th>
																<th>Quantity</th>
																<th>Days</th>
																<th>Time</th>
																<th>Dose</th>
															</tr>
														</thead>
														<tbody>
														<tr>
														@if(!$pprescriptions->isEmpty())
															@foreach($pprescriptions as $pprescriptions1) 		
															<tr>
																<td>{{$pprescriptions1->medicine_name}}</td>
																<td>{{$pprescriptions1->medicine_Quantity}}</td>
																<td>{{$pprescriptions1->medicine_take_Days}}</td>
																<td>{{$pprescriptions1->medicine_take_Time}}</td>
																<td>{{$pprescriptions1->medicine_dose}}</td>
																<td class="text-right">
																	<div class="actions">
																		<a  href="" class="btn btn-sm bg-danger-light">
																			<i class="fe fe-trash"></i> Delete
																		</a>
																	</div>
																</td>
															</tr>
															@endforeach
															
															@else
															<tr>
																<td class="text-danger" colspan="6" align="center"> Data Not Found </td>
															</tr>
															@endif
																
														</tbody>
													</table>
												</div>
											</div>
										</div>
										
									
    </div><!-- Submit Section -->
	<td class="text-right">
			<div class="actions text-right">
				<a class="btn btn-sm bg-success-light" href="{{url('invoice-view/'.$app_data->id)}}">
					<i class="fe fe-pencil"></i> Submit
				</a>
			</div>
			</td>
									<!-- /Submit Section -->
  </div>
  </form>
</div>
									
									<!-- Prescription Item -->
									
									
									<!-- /Prescription Item -->
									
									
									
									
								
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

<!-- doccure/add-prescription.html  30 Nov 2019 04:12:37 GMT -->
</html>
@endsection	
