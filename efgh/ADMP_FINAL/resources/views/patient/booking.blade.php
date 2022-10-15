




@extends('patient.Layout.main_layout')
@section('main_container')


<script>
setInterval(refresh,290000);
function refresh()
{
	history.go(0);
}
</script>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Booking</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">Booking</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-4">
						<div class="card" height="150px">
							<div class="card-body">
								<div class="booking-doc-info">
									<a href="{{url('/doctor-profile')}}" class="booking-doc-img">
										<img src="{{asset('upload/doctor/' . $doctordata->profile_img)}}" alt="User Image">
									</a>
									<div class="booking-info">
										<h4><a href="{{url('/doctor-profile')}}">Dr. <?php echo $doctordata->first_name ?> <?php echo $doctordata->last_name ?></a></h4>
										<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $doctordata->hospital_name ?></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="card booking-schedule schedule-widget p-2">
							<form action="{{url('/booking/'.$doctordata->id)}}" method="post" enctype="multipart/form-data">
								<div class="input-group mb-3 p-3">

									@csrf
									<input type="date" value="{{$value}}" class="form-control" name="searchbydate" placeholder="Search" min="<?php echo (new DateTime())->format('Y-m-d'); ?>">
									<button class="btn btn-success" name="submit" value="send" type="submit">Search Slots...</button>

								</div>
							</form>
						</div>
					</div>
					<!-- Schedule Widget -->

				


					<!-- Schedule Header-->
				
					<div class="schedule-header">
						
						<div class="breadcrumb-bar">
							<div class="container-fluid">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<h4><li class="breadcrumb-item"><a href="">Book Today's Appointment Slots</a></li></h4>
									<h5 style="margin-left:205px;margin-top:5px"><li class="breadcrumb-item"><a href=""><span><b>Today's Dt.<?php echo (new DateTime())->format('Y-m-d'); ?></b></span></a></li></h5>
								</ol>
							</nav>
							
							</div>
						</div>
						<br>
						
						<?php
						if($doctordata->hospital_status=='Available')
						{
						?>
						<!-- Monday Slot -->
						<div class="tab-pane fade show active">
							

							<!-- Slot List -->
							<div class="row m-2">
								<div class="form-group" style="margin-top:8px">
									Morning :
								</div>
								<div class="col-xl-10 doc-times" style="margin-left:18px">
									@if(!$Morningsearchdate->isEmpty())
									@foreach($Morningsearchdate as $d)
									<form action="{{url('/book_app_sess')}}" method="post">
										@csrf
										<input type="hidden" value="{{$d->slot_timing}}" name="slot_timing">
										<input type="hidden" value="{{$d->id}}" name="slot_id">
										<input type="hidden" value="{{$doctordata->id}}" name="doc_id">
										<input type="hidden" value="<?php if(isset($value)){ echo $value; }else { echo (new DateTime())->format('Y-m-d');} ?>" name="appointment_date" />
										<input type="submit" class="doc-slot-list" value="{{$d->slot_timing}}" />
									</form>
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
									@if(!$afternoonsearchdate->isEmpty())
									@foreach($afternoonsearchdate as $d)
									<form action="{{url('/book_app_sess')}}" method="post">
										@csrf
										<input type="hidden" value="{{$d->slot_timing}}" name="slot_timing">
										<input type="hidden" value="{{$d->id}}" name="slot_id">
										<input type="hidden" value="{{$doctordata->id}}" name="doc_id">
										<input type="hidden" value="<?php if(isset($value)){ echo $value; }else { echo (new DateTime())->format('Y-m-d');} ?>" name="appointment_date" />
										<input type="submit" class="doc-slot-list" value="{{$d->slot_timing}}" />
									</form>
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
									@if(!$eveningsearchdate->isEmpty())
									@foreach($eveningsearchdate as $d)
									<form action="{{url('/book_app_sess')}}" method="post">
										@csrf
										<input type="hidden" value="{{$d->slot_timing}}" name="slot_timing">
										<input type="hidden" value="{{$d->id}}" name="slot_id">
										<input type="hidden" value="{{$doctordata->id}}" name="doc_id">
										<input type="hidden" value="<?php if(isset($value)){ echo $value; }else { echo (new DateTime())->format('Y-m-d');} ?>" name="appointment_date" />
										<input type="submit" class="doc-slot-list" value="{{$d->slot_timing}}" />
									</form>
									@endforeach
									@else
									<p class="text-danger mt-2">No Slots Available</p>
									@endif

								</div>
							</div>
							<!-- /Slot List -->

						</div>
						<?php
						}
						else
						{
						?>
							<p class="text-danger mt-2 text-center">Doctor Not Available</p>
						<?php
						}
						?>
						<!-- /Monday Slot -->
					</div>
					<!-- /Schedule Header -->



				</div>
				<!-- /Schedule Widget -->

				<!-- 
				Submit Section

				<div class="submit-section proceed-btn text-right">
					<a href="{{url('/book_appointment/'.$doctordata->id)}}" value="send" name="submit" class="btn btn-primary submit-btn">Proceed to Pay</a>
				</div>
				
				Submit Section -->

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

<!-- Custom JS -->
<script src="{{ url('Frontend/assets/js/script.js') }}"></script>

</body>

</html>
@endsection