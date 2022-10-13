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
											<h3>Reset your password</h3>
										</div>
										
										<!-- Forgot Password Form -->
										<form action="{{url('/ptpassword_store')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group form-focus">
												<input type="text" name="reset_pass" class="form-control floating">
												<label class="focus-label">Enter new Password</label>
												@if ($errors->has('reset_pass'))
            										<span class="text-danger">{{ $errors->first('reset_pass') }}</span>
       											@endif
											</div>
											<div class="form-group form-focus">
												<input type="text" name="confirm_password" class="form-control floating">
												<label class="focus-label">Confirm New Password</label>
												@if ($errors->has('confirm_password'))
            										<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
       											@endif
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" href="forgot_otp">Reset Password</button>
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
@endsection	