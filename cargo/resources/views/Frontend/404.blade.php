@extends('Frontend.Layout.mainlayout')
@section('remaining_content')
@push ('title')
 <title>404 Error</title>
 @endpush

<div class="cs-subheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-subheader-text">
						<h2>404 Page</h2>
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li class="active"><a href="#">404 Page</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main Start -->
	<div class="main-section"> 
		<div class="page-section" style=" padding-top: 280px; padding-bottom:280px;">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class="cs-page-not-found">
                        	<div class="cs-text">
                            <p>Sorry, but the page that you requested doesn't exist.</p>
                            <span class="cs-error">404<em>Error</em></span>
                            </div>
                            <form>
                            	<div class="input-holder">
                                   <i class="icon-search2"> </i>
                                    <input type="text" placeholder="Search by Keyword">
                                    <label>
                                    <input class="cs-bgcolor" type="submit" value="search">
                                    <i class="icon-search2"> </i>
                                    </label>
                                    
                          		</div> 
                                                         	
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="cs-seprater-v1">
                        <span><i class="icon-home2 cs-bgcolor"> </i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
	</div>
	<!-- Main End --> 
	@endsection