@extends('company.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Change Password</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/company-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Change Password</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						
						<div class="col-6">
							
							<!-- General -->
							
								<div class="card">
									
									<div class="card-body">
									<form action="{{url('/company-changepassword')}}" method="post" enctype="multipart/form-data">
											@csrf	
											<div class="form-group">
													<label>Old Password</label>
													<input type="password" class="form-control" name="oldpassword">
														@if($errors->has('oldpassword'))	
															<span class="text-danger" >{{($errors->first('oldpassword'))}}</span>
														@endif
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" class="form-control" name="newpassword">
														@if($errors->has('newpassword'))	
															<span class="text-danger" >{{($errors->first('newpassword'))}}</span>
														@endif
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" class="form-control"  name="confirm_password">
														@if($errors->has('confirm_password'))	
															<span class="text-danger" >{{($errors->first('confirm_password'))}}</span>
														@endif
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
												</div>
											</form>
									</div>
								</div>
							
							<!-- /General -->
								
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-settings')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>
@endsection