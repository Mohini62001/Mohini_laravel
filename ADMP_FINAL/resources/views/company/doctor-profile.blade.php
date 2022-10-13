@extends('company.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Doctor Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/company-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="col-md-12 col-lg-12 col-xl-12">
						
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4 col-xl-12">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body row">
											<div class="col-md-6 col-lg-4 col-xl-3">
												<div class="pro-widget-content">
													<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="{{asset('upload/doctor/' . $fetch->profile_img)}}"  style="margin-left:30px;height:120px;width:120px;" alt="User Image">
													</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-6">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<div class="profile-det-info">
														<h4><a href="{{url('/doctor-patient-profile')}}">Dr. <?php echo $fetch->first_name?> <?php echo $fetch->last_name?></a></h4>
														<p class="doc-speciality">Dentist</p>
														
														<div class="patient-details">
															<h5><b>Hospital Name :</b> <?php echo $fetch->hospital_name?></h5>
															Phone :  <span><?php echo $fetch->dr_mobile?></span><br>
															Email :  <span><?php echo $fetch->email?></span>
														</div>
													</div>
												</div>
											</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3">
												<div class="patient-info">
													<ul>
													<h6 style="margin-left:10px" class="mb-0"><i class="fe fe-location"></i><?php echo $fetch->address?></h6>
														<br>
														<h6 style="margin-left:10px" class="mb-0">Consulting Fees: <?php echo $fetch->consulting_fees?></h6>
														<h6 style="margin-left:10px" class="mb-0">Followup Fees: <?php echo $fetch->followup_fees?></h6>
													</ul>
													<div class="doctor-action" style="margin-left:50px">
														
														
														@if($fetch->visitor_request=='Yes')	
														@if($favdoctor_arr)
														    <a href="{{url('company_fav_doc_del/'.$fetch->id)}}" onclick="" class="btn btn-success fav-btn">
																<i class="fa fa-bookmark"></i>
															</a>
														@else
															<a href="{{url('company_fav_doc/'.$fetch->id)}}" onclick="" class="btn btn-white fav-btn">
																<i class="fa fa-bookmark"></i>
															</a>
															
														@endif
													@else
														@if($favdoctor_arr )
														    <a href="{{url('company_fav_doc_del/'.$fetch->id)}}" onclick="" class="btn btn-success fav-btn">
																<i class="fa fa-bookmark"></i>
															</a>
														@else
															<a href="#edit_personal_details" data-toggle="modal"  onclick="" class="edit-link btn btn-white fav-btn">
																<i class="fa fa-bookmark"></i>
															</a>
															
															
														@endif
													@endif
														<a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#voice_call">
															<i class="fa fa-phone"></i>
														</a>
													</div>
												</div>
											</div>
											
											
										</div>
										<div class="col-md-7 col-lg-8 col-xl-12">
										<div class="card card-table">
											<div class="card-body">
										<td class="text-center">
											<div class="p-2"><h4><b>Pharma Slots</b></h4></div>
										</td>
									<!-- Invoice Table -->
									<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Day</th>
													<th>Slot</th>
													<th>Tiiming</th>
													
												</tr>
											</thead>
											<tbody>
											
											@if(!empty($slot_arr))
											    @foreach($slot_arr as $slot_arr) 
												
													<tr>
														<td>
															<a href="#"> <?php echo $slot_arr->day?></a>
														</td>
														<td>
															<a href="#"> <?php echo $slot_arr->visitor_slot?></a>
														</td>
														<td>
															<h2 class="table-avatar">
																<a href="#" class="badge bg-success p-2"> <?php echo $slot_arr->start_time?> to <?php echo $slot_arr->end_time?> </a>
															</h2>
														</td>
													</tr>
													<tr>
														<td></td>
													</tr>
												
												@endforeach
												@else
													<p class="text-danger mt-2">No Slots Available</p>
												@endif
												
											</tbody>
										</table>
									</div>
									<!-- /Invoice Table -->
									
										<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
								<!-- Personal Details -->
										
										<!-- Edit Details Modal -->
										<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
											<div class="modal-dialog modal-dialog-centered" role="document" >
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Personal Details</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form action="{{url('company_visitor_request/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
														@csrf	
														<div class="row form-row">
															<div class="col-12 ">
																<div class="form-group">
																	<label>Visiting Card</label>
																	
																	<input type="file" class="form-control"  name="visiting_card" value="">
																	@if($errors->has('visiting_card'))
																		<span class="text-danger">{{ $errors->first('visiting_card') }}</span>
																	@endif
																</div>
															</div>
														<button type="submit" name="update" value="Send Request" class="btn btn-primary btn-block">Send Request</button>
														</form>
													</div>
												</div>
											</div>
										</div>
										<!-- /Edit Details Modal -->
										
									</div>

								
								</div>
								<!-- /Personal Details -->

							</div>
							<!-- /Personal Details Tab -->
								</div>
							</div>
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
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-blank-page')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>
@endsection