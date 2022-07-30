<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{url('Frontend/assets/img/favicon.png')}}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/fontawesome/css/all.min.css')}}">
			
			<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap-datetimepicker.min.css')}}">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap-datetimepicker.min.css')}}">
			
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/dropzone/dropzone.min.css')}}">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap-datetimepicker.min.css')}}">
		
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="{{url('Frontend/assets/plugins/fullcalendar/fullcalendar.min.css')}}">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/fancybox/jquery.fancybox.min.css')}}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/select2/css/select2.min.css')}}">
		
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{url('Frontend/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{url('Frontend/assets/js/respond.min.js')}}"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{url('/index')}}" class="navbar-brand logo">
							<img src="{{url('Frontend/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{url('/index')}}" class="menu-logo">
								<img src="{{url('Frontend/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="{{url('/index')}}">Home</a>
							</li>
							<li class="has-submenu">
								<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="{{url('/doctor')}}">Login</a></li>
									<li><a href="{{url('/doctor-dashboard')}}">Doctor Dashboard</a></li>
									<li><a href="{{url('/doctor-appointments')}}">Appointments</a></li>
									<li><a href="{{url('/doctor-schedule-timings')}}">Schedule Timing</a></li>
									<li><a href="{{url('/doctor-my-patients')}}">Patients List</a></li>
									<li><a href="{{url('/doctor-booking')}}">Booking</a></li>
									<li><a href="{{url('/doctor-patient-profile')}}">Patients Profile</a></li>
									<li><a href="{{url('/doctor-chat-doctor')}}">Chat</a></li>
									<li><a href="{{url('/doctor-invoices')}}">Invoices</a></li>
									<li><a href="{{url('/doctor-profile-settings')}}">Profile Settings</a></li>
									<li><a href="{{url('/doctor-reviews')}}">Reviews</a></li>
									<li><a href="{{url('/doctor-register')}}">Doctor Register</a></li>
									<li><a href="{{url('/doctor-change-password')}}">Change Password</a></li>
									<li><a href="{{url('/doctor-calendar')}}">Calendar</a></li>
									<li><a href="{{url('/doctor-favourites')}}">Favourites</a></li>
									<li><a href="{{url('/doctor-forgot-password')}}">Forgot Password</a></li>
								
									<li><a href="{{url('/doctor-components')}}">Components</a></li>
									<li><a href="{{url('/doctor-blank-page')}}">Starter Page</a></li>
									
								</ul>
							</li>	
							
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{url('/login')}}">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->