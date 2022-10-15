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
									<li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Schedule Timings</h2>
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
						 @if(session()->has('success'))
						 	<i class="alert alert-success">{{session('success')}}</i>
						 @endif
							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Schedule Timings</h4>
											<form action="{{url('/doctor-patient-schedule-timings')}}" method="post" enctype="multipart/form-data">
												@csrf
											<div class="profile-box">
												<div class="row">

												<div class="col-lg-4">
														<div class="form-group">               
															<label>Select Days</label>
															<select class="select form-control" name="day">
																<option value="" selected="selected">---Select Days---</option>
																<option value="Monday">Monday</option>
																<option value="Tuesday">Tuesday</option>  
																<option value="Wednesday">Wednesday</option>
																<option value="Thursday">Thursday</option>
																<option value="Friday">Friday</option>
																<option value="Saturday">Saturday</option>
																<option value="Sunday">Sunday</option>
															</select>
															@if ($errors->has('day'))
																<span class="text-danger">{{ $errors->first('day') }}</span>
															@endif
														</div>
												</div>

												<div class="col-lg-4">
														<div class="form-group">               
															<label>Select Timings</label>
															<select class="select form-control" name="time">
																<option value="" selected="selected">---Select Timing---</option>
																<option value="Morning">Morning</option>
																<option value="Afternoon">Afternoon</option>  
																<option value="Evening">Evening</option>
															</select>
															@if ($errors->has('time'))
																<span class="text-danger">{{ $errors->first('time') }}</span>
															@endif
														</div>
												</div>

												<div class="col-lg-4">
													<div class="form-group">
														<label>Starting Time</label>
														<input type="time" name="start_time" class="form-control" placeholder="Enter Starting Time">
														@if ($errors->has('start_time'))
																<span class="text-danger">{{ $errors->first('start_time') }}</span>
														@endif
													</div>
												</div>

											<br>

												<div class="col-lg-4">
													<div class="form-group">
														<label>Total No. of Slots</label>
														<input type="number" name="no_slots" class="form-control" placeholder="Enter No. of Slots">
														@if ($errors->has('no_slots'))
																<span class="text-danger">{{ $errors->first('no_slots') }}</span>
														@endif
													</div>
												</div>

													<div class="col-lg-4">
														<div class="form-group">               
															<label>Timing Slot Duration</label>
															<select class="select form-control" name="min">
																<option value="" selected="selected">---Select Slot Timing---</option>
																<option value="+10 minutes">10 mins</option>
																<option value="+15 minutes">15 mins</option>
																<option value="+30 minutes">30 mins</option>  
																<option value="+45 minutes">45 mins</option>
																<option value="+1 hour">1 Hour</option>
															</select>
															@if ($errors->has('min'))
																<span class="text-danger">{{ $errors->first('min') }}</span>
															@endif
														</div>
													</div>
											</div>     
											<div class="col-lg-4">
												<div class="submit-section submit-btn-bottom">
													<button type="submit" class="btn btn-primary submit-btn" name="submit" value="send">Add Slots</button>
												</div>
											</div>
										</form>
											<div class="row">
													<div class="col-md-12">
														<div class="card schedule-widget mb-0">
														
															<!-- Schedule Header-->
															<div class="schedule-header">
															
																<!-- Schedule Nav -->
																<div class="schedule-nav">
																	<ul class="nav nav-tabs nav-justified">
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_sunday">Sunday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link active" data-toggle="tab" href="#slot_monday">Monday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_tuesday">Tuesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_wednesday">Wednesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_thursday">Thursday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_friday">Friday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_saturday">Saturday</a>
																		</li>
																	</ul>
																</div>
																<!-- /Schedule Nav -->
																
															</div>
															<!-- /Schedule Header -->
															
															<!-- Schedule Content -->
															<div class="tab-content schedule-cont">
															
																<!-- Sunday Slot -->
																
																<div id="slot_sunday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Sunday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningSunday->isEmpty())
																			@foreach($morningSunday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$afternoonSunday->isEmpty())
																			@foreach($afternoonSunday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$eveningSunday->isEmpty())
																			@foreach($eveningSunday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																</div>
																<!-- /Sunday Slot -->

																<!-- Monday Slot -->
																<div id="slot_monday" class="tab-pane fade show active">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Monday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningMonday->isEmpty())
																			@foreach($morningMonday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:6px">
																		@if(!$afternoonMonday->isEmpty())
																			@foreach($afternoonMonday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:20px">
																		@if(!$eveningMonday->isEmpty())
																			@foreach($eveningMonday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																	
																</div>
																<!-- /Monday Slot -->

																<!-- Tuesday Slot -->
																<div id="slot_tuesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Tuesday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningTuesday->isEmpty())
																			@foreach($morningTuesday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$afternoonTuesday->isEmpty())
																			@foreach($afternoonTuesday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$eveningTuesday->isEmpty())
																			@foreach($eveningTuesday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																</div>
																<!-- /Tuesday Slot -->

																<!-- Wednesday Slot -->
																<div id="slot_wednesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Wednesday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningWednesday->isEmpty())
																			@foreach($morningWednesday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$afternoonWednesday->isEmpty())
																			@foreach($afternoonWednesday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$eveningWednesday->isEmpty())
																			@foreach($eveningWednesday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																</div>
																<!-- /Wednesday Slot -->

																<!-- Thursday Slot -->
																<div id="slot_thursday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Thursday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningThursday->isEmpty())
																			@foreach($morningThursday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$afternoonThursday->isEmpty())
																			@foreach($afternoonThursday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$eveningThursday->isEmpty())
																			@foreach($eveningThursday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																</div>
																<!-- /Thursday Slot -->

																<!-- Friday Slot -->
																<div id="slot_friday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Friday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningFriday->isEmpty())
																			@foreach($morningFriday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$afternoonFriday->isEmpty())
																			@foreach($afternoonFriday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$eveningFriday->isEmpty())
																			@foreach($eveningFriday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																</div>
																<!-- /Friday Slot -->

																<!-- Saturday Slot -->
																<div id="slot_saturday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a href="{{url('/destroyslot/Saturday')}}" class="btn btn-sm bg-info-light">
																			<i class="fa fa-trash"></i> Delete
																		</a>
																	</h4>
																	<!-- Slot List -->
																	<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Morning :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$morningSaturday->isEmpty())
																			@foreach($morningSaturday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Afternoon :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$afternoonSaturday->isEmpty())
																			@foreach($afternoonSaturday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																<div class="row m-2">
																	<div class="form-group" style="margin-top:8px">
																	    Evening :
																	</div>
																	<div class="col-xl-10 doc-times" style="margin-left:18px">
																		@if(!$eveningSaturday->isEmpty())
																			@foreach($eveningSaturday as $d)
																			<div class="doc-slot-list">
																				{{$d->slot_timing}} 
																			</div>
																			@endforeach
																		@else
																			<p class="text-danger mt-2">No Slots Available</p>
																		@endif
																		
																	</div>
																</div>
																	<!-- /Slot List -->
																</div>
																<!-- /Saturday Slot -->

															</div>
															<!-- /Schedule Content -->
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Add Time Slot Modal -->
		<div class="modal fade custom-modal" id="add_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Time Slots</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>  
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div> 
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>  
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div> 
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Time Slot Modal -->
		
		<!-- Edit Time Slot Modal -->
		<div class="modal fade custom-modal" id="edit_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Time Slots</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option selected>12.00 am</option>
														<option>12.30 am</option>  
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div> 
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option selected>12.30 am</option>  
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div> 
											</div>
										</div>
									</div>
								</div>
								
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option selected>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option selected>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>
								
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option selected>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option selected>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

							</div>
							
							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Time Slot Modal -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Select2 JS -->
		<script src="{{  url('Frontend/assets/plugins/select2/js/select2.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/schedule-timings')}}  30 Nov 2019 04:12:09 GMT -->
</html>
@endsection	