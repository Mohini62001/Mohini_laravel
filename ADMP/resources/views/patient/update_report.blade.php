@extends('patient.Layout.main_layout') 	
@section('main_container')
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{url('Frontend/assets/img/login-banner.png')}}" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Submit Your Reports</h3>
										</div>
										
										<!-- Forgot Password Form -->
										<form action="{{url('/update_report/'.$id)}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group">
												<input type="file" name="report_img[]" class="form-control" multiple />
												@if ($errors->has('report_img'))
													<span class="text-danger">{{ $errors->first('report_img') }}</span>
												@endif
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" value="send" name="submit" type="submit">Submit</button>
										</form>
										<!-- /Forgot Password Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
							
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			@endsection	
		   
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

<!-- doccure/{{url('/forgot-password')}}  30 Nov 2019 04:12:20 GMT -->
</html>
