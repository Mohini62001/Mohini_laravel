<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-forgot-password')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Forgot Password</title>
		
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
								<h1>Reset Your Password</h1>
								<p class="account-subtitle"></p>
								
								<!-- Form -->
								<form action="{{url('/cpassword_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input type="password" name="reset_pass" class="form-control floating" placeholder="Enter new Password">
                                        @if ($errors->has('reset_pass'))
                                            <span class="text-danger">{{ $errors->first('reset_pass') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" name="confirm_password" class="form-control floating" placeholder="Confirm New Password">
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit" href="forgot_otp">Reset Password</button>
                                </form>
								<!-- /Form -->
								
								<div class="text-center dont-have">Remember your password? <a href="{{url('/admin-login')}}">Login</a></div>
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-forgot-password')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>