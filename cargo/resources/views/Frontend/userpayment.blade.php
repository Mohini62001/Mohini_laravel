@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

@push ('title')
 <title>Payment Details</title>
 @endpush

	
	<!-- Main Start -->
	<div class="main-section">
    	<div class="page-section" style="background:url({{url('Frontend/assets/extra-images/user-bg-img.jpg')}}) no-repeat;background-size:cover;min-height:175px;margin-top:-30px;margin-bottom:-129px;"></div>

		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="cs-user-account-holder">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<ul class="cs-user-accounts-list">
										<li><a href="mycar">My vehicles</a></li>
								        <li><a href="userpayment">Payments</a></li>
										<li class="active"><a href="profilesetting">Profile Settings</a></li>
										<li><a href="advcar">Post a  vehicles</a></li>
										<li><a href="#">Sign Out</a></li>
									</ul>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-user-section-title">
										<h4>Payments</h4>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="payment-list">
										<ul>
											<li>
												<div class="payment-label">
													<ul>
														<li>Packege</li>
														<li>Trans ID</li>
														<li>Date</li>
														<li>Payment</li>
														<li>Amount</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="payment-content">
													<ul>
														<li><b>human trafficking</b><em style="color:#d94551;">Decline</em></li>
														<li>AB1352CC</li>
														<li>23.12.2014</li>
														<li><img src="{{url('Frontend/assets/extra-images/payment-option-1.jpg')}}" alt="" /></li>
														<li>$22.89</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="payment-content">
													<ul>
														<li><b>Featured + Standard</b></li>
														<li>B1352CC</li>
														<li>26.10.2014</li>
														<li><img src="{{url('Frontend/assets/extra-images/payment-option-2.jpg')}}" alt="" /></li>
														<li>$199.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="payment-content">
													<ul>
														<li><b>Basic Packege</b><em style="color:#ff9000;">Pending</em></li>
														<li>AB1352</li>
														<li>8.8.2014</li>
														<li><img src="{{url('Frontend/assets/extra-images/payment-option-3.jpg')}}" alt="" /></li>
														<li>$250.80</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="payment-content">
													<ul>
														<li><b>Basic Packege</b></li>
														<li>1352CC</li>
														<li>26.10.2014</li>
														<li><img src="{{url('Frontend/assets/extra-images/payment-option-4.jpg')}}" alt="" /></li>
														<li>$20.00</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="payment-content">
													<ul>
														<li><b>Premium</b></li>
														<li>AB1352CC</li>
														<li>8.8.2014</li>
														<li><img src="{{url('Frontend/assets/extra-images/payment-option-5.jpg')}}" alt="" /></li>
														<li>$48.00</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="page-section" style="background:#19171a;">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="cs-ad" style="text-align:center; padding:55px 0 32px;">
                          <div class="cs-media">
                                <figure>
                                    <img src="{{url('Frontend/assets/extra-images/cs-ad-img.jpg')}}" alt="" />
                                </figure>
                        	</div>
                    	</div>
                    </div>
                </div>
            </div>
  		</div>
	</div>
	<!-- Main End --> 
	
	@endsection