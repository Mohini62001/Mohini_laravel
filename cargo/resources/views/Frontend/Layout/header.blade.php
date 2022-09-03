<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@stack ('title')
<link href="{{url('Frontend/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{url('Frontend/assets/css/bootstrap-theme.css')}}" rel="stylesheet">
<link href="{{url('Frontend/assets/css/iconmoon.css')}}" rel="stylesheet">
<link href="{{url('Frontend/assets/css/chosen.css')}}" rel="stylesheet">
<link href="{{url('Frontend/style.css')}}" rel="stylesheet">
<link href="{{url('Frontend/cs-automobile-plugin.css')}}" rel="stylesheet">
<link href="{{url('Frontend/assets/css/color.css')}}" rel="stylesheet">
<link href="{{url('Frontend/assets/css/widget.css')}}" rel="stylesheet">
<link href="{{url('Frontend/assets/css/responsive.css')}}" rel="stylesheet">
<!-- <link href="{{url('Frontend/assets/css/bootstrap-rtl.css')}}" rel="stylesheet"> Uncomment it if needed! -->

<!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
<script src="{{url('Frontend/assets/scripts/jquery.js')}}"></script>
<script src="{{url('Frontend/assets/scripts/modernizr.js')}}"></script>
<script src="{{url('Frontend/assets/scripts/bootstrap.min.js')}}"></script>
</head>
<body class="wp-automobile">
<div class="wrapper"> 
	<!-- Header Start -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="cs-logo">
						<div class="cs-media">
							<figure><a href="index-2"><img src="{{url('Frontend/assets/images/cs-logo.png')}}" alt="" /></a></figure>
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
					<div class="cs-main-nav pull-right">
						<nav class="main-navigation">
							<ul>
								<li><a href="index">Home</a></li>
								<li><a href="about">About Us</a></li>
								
								<li><a href="#">Shop</a>
									<ul>
										
										<li><a href="cardetail">Detail View</a></li>
										<li><a href="cart">Cart</a></li>
										<li><a href="checkout">Checkout</a></li>
									</ul>
								</li>
								<li class="cs-user-option">
									<div class="cs-login">
										<div class="cs-login-dropdown"> <a href="#"><i class="icon-user2"></i> Kaiser <i class="icon-chevron-down2"></i></a>
											<div class="cs-user-dropdown"> <strong>Post a new Ad</strong>
												<ul>
													<li><a href="profilesetting">General Setting<span class="cs-bgcolor">3</span></a></li>
													<li><a href="mycar">My Posted Cars <span class="cs-bgcolor">23</span></a></li>
													<li><a href="advcar">Post New Car</a></li>
													
													<li><a href="userpayment">Payment</a></li>
													
												</ul>
												<a class="btn-sign-out" href="#">Logout</a> </div>
										</div>
										<a class="cs-bgcolor btn-form" data-toggle="modal" href="http://chimpgroup.com/themeforest/automobile/remote" data-target="#user-sign-up" aria-hidden="true"><i class="icon-plus"></i> Sell Car</a> 
										<!-- Modal -->
										<div class="modal fade" id="user-sign-up" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body">
														<h4>Create Account</h4>
														<div class="cs-login-form">
															<form action="{{url('/signup')}}" method="post" enctype="multipart/form-data">
																@csrf
																<div class="input-holder">
																	<label for="cs-username"> <strong>USERNAME</strong> <i class="icon-user-plus2"></i>
																		<input type="text" class="" name="username" id="cs-username" placeholder="Type desired username">
																	</label>
																</div>
																<div class="input-holder">
																	<label for="cs-email"> <strong>Email</strong> <i class="icon-envelope"></i>
																		<input type="email" class="" name="email" id="cs-email" placeholder="Enter your email">
																	</label>
																</div>
																<div class="input-holder">
																	<label for="cs-login-password"> <strong>Password</strong> <i class="icon-unlock40"></i>
																		<input type="password" name="password" id="cs-login-password" placeholder="******">
																	</label>
																</div>
																<div class="input-holder">
																	<label for="cs-confirm-password"> <strong>confirm password</strong> <i class="icon-unlock40"></i>
																		<input type="password" name="password" id="cs-confirm-password" placeholder="******">
																	</label>
																</div>
																<div class="input-holder">
																	<input class="cs-color csborder-color" type="submit" name="submit"  placeholder="Create Account" value="Send">
																</div>
															</form>
														</div>
													</div>
													<div class="modal-footer"> <a data-dismiss="modal" data-target="#user-sign-in" data-toggle="modal" href="javascript:;" aria-hidden="true">Already have account</a>
														<div class="cs-separator"><span>or</span></div>
														<div class="cs-user-social"> <em>Signin with your Social Networks</em>
															<ul>
																<li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
																<li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
																<li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="user-sign-in" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body">
														<h4>User Sign in</h4>
														<div class="cs-login-form">
															<form action="{{url('/customerlogin')}}" method="post" enctype="multipart/form-data">
																@csrf
																<div class="input-holder">
																	<label for="cs-email"> <strong>Email</strong> <i class="icon-envelope"></i>
																		<input type="email" class="" name="email" id="cs-email" placeholder="enter your email">
																	</label>
																</div>
																<div class="input-holder">
																	<label for="cs-login-password-1"> <strong>Password</strong> <i class="icon-unlock40"></i>
																		<input type="password" name="password" id="cs-login-password-1" placeholder="******">
																	</label>
																</div>
																<div class="input-holder"> <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Forgot password?</a> </div>
																<div class="input-holder">
																	<input class="cs-color csborder-color" type="submit" name="submit" value="SIGN IN">
																</div>
															</form>
														</div>
													</div>
													<div class="modal-footer">
														<div class="cs-separator"><span>or</span></div>
														<div class="cs-user-social"> <em>Signin with your Social Networks</em>
															<ul>
																<li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
																<li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
																<li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
															</ul>
														</div>
														<div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Not a Member yet? </strong> <a class="cs-color" data-dismiss="modal" data-target="#user-sign-up" data-toggle="modal" href="javascript:;" aria-hidden="true">Signup Now</a> </div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="user-forgot-pass" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body">
														<h4>Password Recovery</h4>
														<div class="cs-login-form">
															<form>
																<div class="input-holder">
																	<label for="cs-email-1"> <strong>Email</strong> <i class="icon-envelope"></i>
																		<input type="email" class="" id="cs-email-1" placeholder="Type desired username">
																	</label>
																</div>
																<div class="input-holder">
																	<input class="cs-color csborder-color" type="submit" value="Send">
																</div>
															</form>
														</div>
													</div>
													<div class="modal-footer">
														<div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Not a Member yet? </strong> <a href="javascript:;" data-toggle="modal" data-target="#user-sign-up" data-dismiss="modal" class="cs-color" aria-hidden="true">Signup Now</a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--<div class="cs-wish-list"><a href="#"><i class=" icon-heart4"></i><span>0</span></a>
                                        <div class="wish-list-dropdown">
                                            <strong>Post a new Ad</strong>
                                            <ul>
                                                <li class="alert alert-dismissible  fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="cs-media">
                                                        <a href="#">
                                                            <img src="{{url('Frontend/assets/extra-images/single-banner-img-1.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cs-info">
                                                        <h6><a href="#">Desktop Application Developer Support</a></h6>
                                                        Added <span>Feb 8, 2016</span>
                                                    </div>
                                                </li>
                                                <li class="alert alert-dismissible  fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="cs-media">
                                                        <a href="#">
                                                            <img src="{{url('Frontend/assets/extra-images/single-banner-img-2.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cs-info">
                                                        <h6><a href="#">Desktop Application Developer Support</a></h6>
                                                        Added <span>Feb 8, 2016</span>
                                                    </div>
                                                </li>
                                                <li class="alert alert-dismissible  fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="cs-media">
                                                        <a href="#">
                                                            <img src="{{url('Frontend/assets/extra-images/single-banner-img-3.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cs-info">
                                                        <h6><a href="#">Desktop Application Developer Support</a></h6>
                                                        Added <span>Feb 8, 2016</span>
                                                    </div>
                                                </li>
                                                <li class="alert alert-dismissible  fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="cs-media">
                                                        <a href="#">
                                                            <img src="{{url('Frontend/assets/extra-images/single-banner-img-1.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cs-info">
                                                        <h6><a href="#">Desktop Application Developer Support</a></h6>
                                                        Added <span>Feb 8, 2016</span>
                                                    </div>
                                                </li>
                                                <li class="alert alert-dismissible  fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="cs-media">
                                                        <a href="#">
                                                            <img src="{{url('Frontend/assets/extra-images/single-banner-img-2.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cs-info">
                                                        <h6><a href="#">Desktop Application Developer Support</a></h6>
                                                        Added <span>Feb 8, 2016</span>
                                                    </div>
                                                </li>
                                                <li class="alert alert-dismissible  fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="cs-media">
                                                        <a href="#">
                                                            <img src="{{url('Frontend/assets/extra-images/single-banner-img-3.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cs-info">
                                                        <h6><a href="#">Desktop Application Developer Support</a></h6>
                                                        Added <span>Feb 8, 2016</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a class="btn-view-all" href="#">View All</a>
                                        </div>
                                    </div>--> 
								</li>
							</ul>
						</nav>
                        <div class="cs-user-option hidden-lg visible-sm visible-xs">
							<div class="cs-login">
								<div class="cs-login-dropdown"> <a href="#"><i class="icon-user2"></i> Kaiser <i class="icon-chevron-down2"></i></a>
									<div class="cs-user-dropdown"> <strong>Post a new Ad</strong>
										<ul>
											<li><a href="user-genral-setting">General Setting<span class="cs-bgcolor">3</span></a></li>
											<li><a href="user-car-listing">My Posted Cars <span class="cs-bgcolor">23</span></a></li>
											<li><a href="user-post-new-vehicles">Post New Car</a></li>
											<li><a href="user-car-shortlist">Shortlisted</a></li>
											<li><a href="user-payments">Payment</a></li>
											<li><a href="user-packages">Packages</a></li>
										</ul>
										<a class="btn-sign-out" href="#">Logout</a> </div>
								</div>
								<a class="cs-bgcolor btn-form" data-toggle="modal" href="http://chimpgroup.com/themeforest/automobile/remote" data-target="#user-sign-up-sm" aria-hidden="true"><i class="icon-plus"></i> Sell Car</a> 
								<!-- Modal -->
								<div class="modal fade" id="user-sign-up-sm" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<h4>Create Account</h4>
												<div class="cs-login-form">
													<form>
														<div class="input-holder">
															<label for="cs-username11"> <strong>USERNAME</strong> <i class="icon-user-plus2"></i>
																<input type="text" class="" id="cs-username11" placeholder="Type desired username">
															</label>
														</div>
														<div class="input-holder">
															<label for="cs-email11"> <strong>Email</strong> <i class="icon-envelope"></i>
																<input type="email" class="" id="cs-email11" placeholder="Type desired username">
															</label>
														</div>
														<div class="input-holder">
															<label for="cs-login-password11"> <strong>Password</strong> <i class="icon-unlock40"></i>
																<input type="password" id="cs-login-password11" placeholder="******">
															</label>
														</div>
														<div class="input-holder">
															<label for="cs-confirm-password11"> <strong>confirm password</strong> <i class="icon-unlock40"></i>
																<input type="password" id="cs-confirm-password11" placeholder="******">
															</label>
														</div>
														<div class="input-holder">
															<input class="cs-color csborder-color" type="submit" value="Create Account">
														</div>
													</form>
												</div>
											</div>
											<div class="modal-footer"> <a data-dismiss="modal" data-target="#user-sign-in-sm" data-toggle="modal" href="javascript:;" aria-hidden="true">Already have account</a>
												<div class="cs-separator"><span>or</span></div>
												<div class="cs-user-social"> <em>Signin with your Social Networks</em>
													<ul>
														<li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
														<li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
														<li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="user-sign-in-sm" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<h4>User Sign in</h4>
												<div class="cs-login-form">
													<form>
														<div class="input-holder">
															<label for="cs-username-111"> <strong>USERNAME</strong> <i class="icon-user-plus2"></i>
																<input type="text" class="" id="cs-username-111" placeholder="Type desired username">
															</label>
														</div>
														<div class="input-holder">
															<label for="cs-login-password-111"> <strong>Password</strong> <i class="icon-unlock40"></i>
																<input type="password" id="cs-login-password-111" placeholder="******">
															</label>
														</div>
														<div class="input-holder"> <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass-sm" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Forgot password?</a> </div>
														<div class="input-holder">
															<input class="cs-color csborder-color" type="submit" value="SIGN IN">
														</div>
													</form>
												</div>
											</div>
											<div class="modal-footer">
												<div class="cs-separator"><span>or</span></div>
												<div class="cs-user-social"> <em>Signin with your Social Networks</em>
													<ul>
														<li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
														<li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
														<li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
													</ul>
												</div>
												<div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Not a Member yet? </strong> <a class="cs-color" data-dismiss="modal" data-target="#user-sign-up-sm" data-toggle="modal" href="javascript:;" aria-hidden="true">Signup Now</a> </div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="user-forgot-pass-sm" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<h4>Password Recovery</h4>
												<div class="cs-login-form">
													<form>
														<div class="input-holder">
															<label for="cs-email-111"> <strong>Email</strong> <i class="icon-envelope"></i>
																<input type="email" class="" id="cs-email-111" placeholder="Type desired username">
															</label>
														</div>
														<div class="input-holder">
															<input class="cs-color csborder-color" type="submit" value="Send">
														</div>
													</form>
												</div>
											</div>
											<div class="modal-footer">
												<div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Not a Member yet? </strong> <a href="javascript:;" data-toggle="modal" data-target="#user-sign-up-sm" data-dismiss="modal" class="cs-color" aria-hidden="true">Signup Now</a> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--<div class="cs-wish-list"><a href="#"><i class=" icon-heart4"></i><span>0</span></a>
                            <div class="wish-list-dropdown">
                                <strong>Post a new Ad</strong>
                                <ul>
                                    <li class="alert alert-dismissible  fade in" role="alert">

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="cs-media">
                                            <a href="#">
                                                <img src="{{url('Frontend/assets/extra-images/single-banner-img-1.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="cs-info">
                                            <h6><a href="#">Desktop Application Developer Support</a></h6>
                                            Added <span>Feb 8, 2016</span>
                                        </div>
                                    </li>
                                    <li class="alert alert-dismissible  fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="cs-media">
                                            <a href="#">
                                                <img src="{{url('Frontend/assets/extra-images/single-banner-img-2.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="cs-info">
                                            <h6><a href="#">Desktop Application Developer Support</a></h6>
                                            Added <span>Feb 8, 2016</span>
                                        </div>
                                    </li>
                                    <li class="alert alert-dismissible  fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="cs-media">
                                            <a href="#">
                                                <img src="{{url('Frontend/assets/extra-images/single-banner-img-3.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="cs-info">
                                            <h6><a href="#">Desktop Application Developer Support</a></h6>
                                            Added <span>Feb 8, 2016</span>
                                        </div>
                                    </li>
                                    <li class="alert alert-dismissible  fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="cs-media">
                                            <a href="#">
                                                <img src="{{url('Frontend/assets/extra-images/single-banner-img-1.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="cs-info">
                                            <h6><a href="#">Desktop Application Developer Support</a></h6>
                                            Added <span>Feb 8, 2016</span>
                                        </div>
                                    </li>
                                    <li class="alert alert-dismissible  fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="cs-media">
                                            <a href="#">
                                                <img src="{{url('Frontend/assets/extra-images/single-banner-img-2.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="cs-info">
                                            <h6><a href="#">Desktop Application Developer Support</a></h6>
                                            Added <span>Feb 8, 2016</span>
                                        </div>
                                    </li>
                                    <li class="alert alert-dismissible  fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="cs-media">
                                            <a href="#">
                                                <img src="{{url('Frontend/assets/extra-images/single-banner-img-3.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="cs-info">
                                            <h6><a href="#">Desktop Application Developer Support</a></h6>
                                            Added <span>Feb 8, 2016</span>
                                        </div>
                                    </li>
                                </ul>
                                <a class="btn-view-all" href="#">View All</a>
                            </div>
                        </div>--> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End --> 