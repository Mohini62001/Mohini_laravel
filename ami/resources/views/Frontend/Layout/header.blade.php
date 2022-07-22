<!DOCTYPE html>
<html lang="en">

<!-- Acto/service-3  13 Nov 2019 13:05:19 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

@stack ('title')

<!-- Stylesheets -->
<link href="{{url('Frontend/css/style.css')}}" rel="stylesheet">
<link href="{{url('Frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="icon" href="{{url('Frontend/images/favicon.ico')}}" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    


    <!-- search-box-layout -->
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
                            <a href="mailto:amienterprise221@gmail.com"><u>amienterprise221@gmail.com</u></a>
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

        <!-- header-bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="outer-container">
                    <div class="nav-outer clearfix">
                        <div class="menu-area pull-left clearfix">
                            
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index">Home</a></li>
                                        <li><a href="service">Services</a></li>
                                        <li><a href="shop">shop</a></li>
                                        <li><a href="gallery_site">Gallery</a></li>
                                        <li><a href="case">case</a></li>
                                        <li><a href="about">About</a></li>
                                        <li><a href="about">Reviews</a></li>
										
										@if(Session('customer_id'))
										   <li><a href="flogout">Logout</a></li>
										 									   
                                        @else											 
                                           <li><a href="flogin">Login</a></li>
										@endif
										
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="info-box pull-right clearfix">
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-skype" style="margin-top:15px;"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f" style="margin-top:15px;"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" style="margin-top:15px;"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in" style="margin-top:15px;"></i></a></li>
                            </ul>
                            <div class="search-box">
                                <div class="header-flyout-searchbar">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
							@if(Session('customer_id'))
										   
										   <div class="user" ><a href="myaccount"><i class="fa fa-user"></i></a>								   
                                        @else											 
                                         
										@endif
                            
							

							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom end -->

        
    </header>
    <!-- main-header end -->