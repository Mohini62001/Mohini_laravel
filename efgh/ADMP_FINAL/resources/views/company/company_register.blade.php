<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Register</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('/Backend/assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/font-awesome.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/style.css')}}">
		
		<!--[if lt IE 9]>
			<script src="{{url('Backend/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{url('Backend/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{url('/Backend/assets/img/logo-white.png')}}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form action="/companyregister" method="post" enctype="multipart/form-data">
                                    @csrf
									<div class="form-group">
										<input class="form-control" type="text" name="first_name" value="{{old('first_name')}}" placeholder="First Name">
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name')}}</span>
                                        @endif
									</div>
                                    <div class="form-group">
										<input class="form-control" type="text" name="last_name" value="{{old('last_name')}}" placeholder="Last Name">
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name')}}</span>
                                        @endif
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email')}}</span>
                                        @endif
									</div>
                                    <div class="form-group">
										<input class="form-control" type="text" name="company_name" value="{{old('company_name')}}" placeholder="Company Name">
                                        @if ($errors->has('company_name'))
                                            <span class="text-danger">{{ $errors->first('company_name')}}</span>
                                        @endif
									</div>
                                    <div class="form-group">
                                        <label>Profile Img</label>
										<input class="form-control" type="file" name="cprofile_img" >
                                        @if ($errors->has('cprofile_img'))
                                            <span class="text-danger">{{ $errors->first('cprofile_img')}}</span>
                                        @endif
									</div>
                                    <div class="form-group">
                                    <label>Visiting Card</label>
										<input class="form-control" type="file" name="visiting_card" >
                                        @if ($errors->has('visiting_card'))
                                            <span class="text-danger">{{ $errors->first('visiting_card')}}</span>
                                        @endif
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password')}}</span>
                                        @endif
									</div>
									
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit" name="submit" value="Send">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								
								
								
								
								<div class="text-center dont-have">Already have an account? <a href="{{url('/company')}}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>