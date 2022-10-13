@extends('manager.Layout.main_layout') 	
@section('main_container')
<script>
setInterval(refresh,290000);
function refresh()
{
	history.go(0);
}
</script>			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/manager-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
								
							</div>
							@if(session()->has('success'))
												
									<i class="alert alert-success">{{session('success')}}</i>
												
								@endif
						</div>
						
					</div>
					<!-- /Page Header -->
					
					<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<div class="col-md-12 col-lg-12 col-xl-12">
						    <input class="form-control" id="myInput" type="text" placeholder="Search..">
							<br>
							<div class="myclass row row-grid">
							
							@if(!$managerfavdoctor_arr->isEmpty())
							@foreach($managerfavdoctor_arr as $data)

								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card">
										<img class="card-img-top rounded-circle p-3" src="{{asset('upload/doctor/'.$data->profile_img)}}" alt="Card image" style="width:100%">
										<div class="card-body">
											<h5 class="card-title">Dr. <?php echo $data->first_name?> <?php echo $data->last_name?> : <?php echo $data->doctor_id?></h5>
											
													@php
													$current=date('Y-m-d');
													$timestamp = strtotime($current);
													$day=date('l',$timestamp);

													$plusdate=time()+(1*24*60*60);
													$next_date=date('Y-m-d',$plusdate);
													$nexttimestamp = strtotime($next_date);
													$nextday=date('l',$nexttimestamp);

													date_default_timezone_set('asia/calcutta');
													$current_time=date('H:i:s');

													@endphp	
													@if(!$slot_manager_arr->isEmpty())
													<form action="{{url('/manager_app_book')}}" method="post" enctype="multipart/form-data">
													@csrf
													@foreach($slot_manager_arr as $slots)
														@if($current_time<"09:00:00" )
															@if($slots->doc_id==$data->doctor_id && $slots->day==$day)
															<h6 class="card-text"> Book Today Slot</h6>
															<h6 class="card-text">Date : {{$current}}</h6>
															<div class="radio ">
																<label><input type="radio" value="<?php echo $slots->id?>" name="slot_id" checked /> <?php echo $slots->start_time?> to <?php echo $slots->end_time?></label>
																<input type="hidden" name="doctor_id" value="<?php echo $slots->doc_id?>">
																<input type="hidden" name="managerappdate" value="{{$current}}">
															</div>
															@endif
														@else
															@if($slots->doc_id==$data->doctor_id && $slots->day==$nextday)
															<h6 class="card-text"> Book Tomorrow Slot</h6>
															<h6 class="card-text">Date : {{$next_date}}</h6>
															<div>
																<label><input type="radio" value="<?php echo $slots->id?>" name="slot_id" checked /> <?php echo $slots->start_time?> to <?php echo $slots->end_time?></label>
																<input type="hidden" name="doctor_id" value="<?php echo $slots->doc_id?>">
																<input type="hidden" name="managerappdate" value="{{$next_date}}">
															</div>
															@endif
														@endif	
													@endforeach
														@if(!$slot_manager_arr->isEmpty())
															<button value="send" name="submit" class="btn btn-primary">Book Call</button>
														@endif
													</form>
													@endif
											
											
										</div>
									</div>
								</div>
								@endforeach
								@else
									<p class="text-danger mt-2">No Favourite Doctors Available</p>
								@endif
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							</div>

						</div>
					</div>

				</div>

			</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
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
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>

			
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{url('Backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('Backend/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-doctor-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
@endsection