@extends('patient.Layout.main_layout') 	
@section('main_container')
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{url('Frontend/assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Adocmedi Patient</span></h3>
										</div>
										<form action="{{url('/patientlogin')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
												@if ($errors->has('email'))
            										<span class="text-danger">{{ $errors->first('email') }}</span>
       											@endif
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password">
												<label class="focus-label">Password</label>
												@if ($errors->has('password'))
            										<span class="text-danger">{{ $errors->first('password') }}</span>
       											@endif
											</div>
											<div class="text-right">
												<a class="forgot-link" href="{{url('/forgot-password')}}">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit" value="send">Login</button>
											
											
											<div class="text-center dont-have">Don’t have an account? <a href="{{url('/register')}}">Register</a></div>
											<br>
											<h4 class="text-center">Doctor and Pharma Logins</h4>
											<div class="row">
												<div class="col-md-12 col-lg-12 text-center">
													<a class="btn btn-primary" href="{{url('/doctor')}}">Doctor</a>
													<a class="btn btn-primary" href="{{url('/mr')}}">MR</a>
													<a class="btn btn-primary" href="{{url('/company')}}">Company</a>
													<a class="btn btn-primary" href="{{url('/manager')}}">Manager</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>
				</div>
			</div>		
			<!-- /Page Content -->
   
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{url('Frontend/assets/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{url('Frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{url('Frontend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{url('Frontend/assets/js/script.js')}}"></script>
		
	</body>

<!-- doccure/{{url('/login')}}  30 Nov 2019 04:12:20 GMT -->
</html>


@endsection	
		