<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
     <link href="{{url('Frontend/css/style.css')}}" rel="stylesheet">
<link href="{{url('Frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="icon" href="{{url('Frontend/images/favicon.ico')}}" type="image/x-icon">
<title>Ami Enterprise</title>
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{url('Backend/Admin/assets/js/html5shiv.min.js')}}')}}')}}')}}')}}')}}')}}')}}')}}')}}"></script>
		<script src="{{url('Backend/Admin/assets/js/respond.min.js')}}')}}')}}')}}')}}')}}')}}')}}')}}')}}"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                <p>
                    @if(Session('success'))
						<i class="alert alert-success">{{session('success')}}</i>
					@endif
                </p>
                    <form action="{{url('/fregister')}}" method="post" enctype="multipart/form-data" class="form-signin">
                        @csrf
						<div class="account-logo">
                            <figure class="logo-box"><a href="index"><img src="{{url('Frontend/images/logo-9.png')}}" alt=""></a></figure>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
						
						 <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
						
						 <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
						
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
						
						 <div class="form-group">
                            <label>MobileNo</label>
                            <input type="text" name="mobileno" class="form-control">
                        </div>
						
						 <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
						

                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" name="submit" value="Send" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="flogin">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('Backend/Admin/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('Backend/Admin/assets/js/popper.min.js')}}"></script>
    <script src="{{url('Backend/Admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('Backend/Admin/assets/js/app.js')}}"></script>
	
</body>


<!-- register24:03-->
</html>