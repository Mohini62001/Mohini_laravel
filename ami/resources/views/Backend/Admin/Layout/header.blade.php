
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('Backend/Admin/assets/img/favicon.ico')}}">
    @stack ('title')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{url('Backend/Admin/assets/js/html5shiv.min.js')}}"></script>
		<script src="{{url('Backend/Admin/assets/js/respond.min.js')}}"></script>
	<![endif]-->
   
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="{{url('Backend/Admin/assets/img/logo.png')}}" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="{{url('Backend/Admin/assets/img/user.jpg')}}" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{url('Backend/Admin/assets/img/user.jpg')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
					<a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="editprofile">Edit Profile</a>
                    <a class="dropdown-item" href="admin-setting">Settings</a>
                    <a class="dropdown-item" href="logout">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="editprofile">Edit Profile</a>
                    <a class="dropdown-item" href="admin-setting">Settings</a>
                    <a class="dropdown-item" href="logout">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                         <li class="active">
                            <a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
						<li class="submenu">
                            <a href="#"><i class="fa fa-cog"></i> <span> Categories</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
							<li><a href="addcategory"></i> <span>Add Category</span></a></li>
						    <li><a href="admin-managecategory"></i> <span>Manage Category</span></a></li>
							</ul>
                        </li>
						
						<li class="submenu">
                            <a href="#"><i class="fa fa-cog"></i> <span> Products</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
							<li><a href="addproduct"></i> <span>Add Product</span></a></li>
						  <li><a href="admin-manageproduct"></i> <span>Manage Product</span></a></li>
							</ul>
                        </li>
						
						
											
						<li class="submenu">
                            <a href="#"><i class="fa fa-cog"></i> <span>Admin</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
							<li><a href="login"></i> <span>Login</span></a></li>
						    <li><a href="register"></i> <span>Register</span></a></li>
							<li><a href="admin-forgetpass"></i> <span>Forgot Password</span></a></li>
							<li><a href="admin-changepass2"></i> <span>Change Password </span></a></li>
							</ul>
                        </li>
                        
						<li>
                            <a href="admin-managecustomer"><i class="fa fa-cog"></i> <span>Manage Customer</span></a>
                        </li>
						
						<li>
                            <a href="admin-managecontact"><i class="fa fa-cog"></i> <span>Manage Contact</span></a>
                        </li>
						
						<li>
                            <a href="admin-lock"><i class="fa fa-cog"></i> <span> Lock Screen</span></a>
                        </li>
						
						
						<li>
                            <a href="admin-gallery"><i class="fa fa-cog"></i> <span>Gallery</span></a>
                        </li>
						
						<li>
                            <a href="admin-404"><i class="fa fa-cog"></i> <span>404 Error</span></a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>