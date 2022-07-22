

<!-- profile22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('Frontend/assets/img/favicon.ico')}}">
<title>Ami Enterprise</title>
    <link rel="stylesheet" type="text/css" href="{{url('Frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Frontend/assets/css/style.css')}}">
	
	<!-- Stylesheets -->
<link href="{{url('Frontend/css/style.css')}}" rel="stylesheet">
<link href="{{url('Frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="icon" href="{{url('Frontend/images/favicon.ico')}}" type="image/x-icon">
    <!--[if lt IE 9]>
		<script src="{{url('Frontend/assets/js/html5shiv.min.js')}}"></script>
		<script src="{{url('Frontend/assets/js/respond.min.js')}}"></script>
	<![endif]-->
	
	
</head>

<body>

    <div class="main-wrapper">
       <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Search</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="get" action="#">
                            <div class="form-row">
                                <input type="search" placeholder="Type to search..." value="" name="s" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->


    <!-- main header -->
    <header class="main-header style-four style-six style-nine">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="inner-container clearfix">
                    <ul class="header-info pull-left">
                    <div class="text">
                            <a href="mailto:amienterprise221@gmail.com">amienterprise221@gmail.com</a>
                        </div>
                    </ul>
                    <ul class="header-nav pull-right">
                        <li>Time : Monday-Friday 09am-6pm</li>
                        <li class="phone"><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(+91)9313403430">(+91) 9313403430</a></li>
                        <li>
                            <div class="language dropdownn">
                                <a class="dropdown-toggle" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Eng</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                    <li><a href="#">Eng</a></li>
                                    <li><a href="#">Chi</a></li>
                                    <li><a href="#">Ger</a></li>
                                    <li><a href="#">Fre</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- header-top end -->

        <!-- header-upper -->
        <div class="header-upper">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="left-content pull-left">
                        <figure class="logo-box"><a href="index"><img src="{{url('Frontend/images/logo-9.png')}}" alt=""></a></figure>
                    </div>
                    <div class="right-content pull-right">
                        <div class="info-box">
                            <div class="icon-box"><i class="flaticon-telephone"></i></div>
                            <h3><a href="tel:9313403430">+91 9313403430</a></h3>
                            <div class="text">Call for any Support</div>
                        </div>
                        <div class="btn-box">
                            <a href="contact">Contact us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-upper end -->

       
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    

                    <div class="col-sm-5 col-6 text-right m-b-30" style="margin-left:500px;">
                        <a href="{{url('edit/'.$fetch->id)}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="{{asset('upload/customer/'.$fetch->img)}}" name="img" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $fetch->name;?></h3>
                                                <small class="text-muted"><?php echo $fetch->username;?></small>
                                               
                                                 </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#"><?php echo $fetch->mobileno;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo $fetch->email;?></a></span>
                                                </li>
                                               
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $fetch->address;?></span>
                                                </li>
                                               
                                            </ul>
											<br>
											<br>
											 <div class="btn-box" style="margin-left:250px;"><a href="flogout" class="btn btn-primary">Logout</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				
            </div>
      
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{url('Frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('Frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('Frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('Frontend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{url('Frontend/assets/js/app.js')}}"></script>
</body>


<!-- profile23:03-->
</html>
        </div>
    </div>
    