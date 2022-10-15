@extends('manager.Layout.main_layout') 	
@section('main_container')
			
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Stockiest</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/manager-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Stockiest</li>
								</ul>
							</div>
							@if(session()->has('success'))
												
								<i class="alert alert-success">{{session('success')}}</i>
												
							@endif
						</div>
					</div>
					<!-- /Page Header -->
					

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add Stockiest</h4>
								</div>
								<div class="card-body">
									<form action="{{url('/manager-add-stockiest')}}" method="post" enctype="multipart/form-data">
									@csrf	
									<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Name</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{old('name')}}">
														@if ($errors->has('name'))
            												<span class="text-danger">{{ $errors->first('name') }}</span>
       													@endif
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<select class="select" id="sid" name="state">
															<option value="">Select</option>
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
														@if ($errors->has('state'))
            												<span class="text-danger">{{ $errors->first('state') }}</span>
       													@endif
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<select class="select" id="city_id" name="city">
															<option value="">Select City</option>
															<option value="">Select State First</option>
														</select>
														@if ($errors->has('city'))
            												<span class="text-danger">{{ $errors->first('city') }}</span>
       													@endif
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area</label>
													<div class="col-lg-9">
														<select class="select" id="area_id" name="area">
															<option value="">Select Area</option>
															<option value="">Select City First</option>
														</select>
														@if ($errors->has('area'))
            												<span class="text-danger">{{ $errors->first('area') }}</span>
       													@endif
													</div>
												</div>
											</div>

											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Mobile No</label>
													<div class="col-lg-9">
														<input type="tel" class="form-control"  name="mobile_no" placeholder="Mobile No" value="{{old('mobile_no')}}">
														@if ($errors->has('mobile_no'))
            												<span class="text-danger">{{ $errors->first('mobile_no') }}</span>
       													@endif
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<textarea name="address" rows="4"  class="form-control"placeholder="Address" value="{{old('address')}}" ></textarea>
														@if ($errors->has('address'))
            												<span class="text-danger">{{ $errors->first('address') }}</span>
       													@endif
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Postal Code</label>
													<div class="col-lg-9">
														<input type="text" class="form-control"  name="pincode" placeholder="Postal Code" value="{{old('pincode')}}">
														@if ($errors->has('pincode'))
            												<span class="text-danger">{{ $errors->first('pincode') }}</span>
       													@endif
													</div>
												</div>
												
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
<script>
$('#sid').on('change', function () {
                var sid = this.value;
                $('#city_id').html('');
                $.ajax({
				url:"{{url('/getmCity')}}",
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
				url:"{{url('/getmArea')}}",
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
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{url('Backend/assets/js/select2.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-form-horizontal')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
</html>
@endsection