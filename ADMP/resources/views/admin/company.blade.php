@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Company</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Member Since</th>
													<th>Earned</th>
													<th>Account Status</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Ruby Perrin</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>14 Jan 2019 <br><small>02.59 AM</small></td>
													
													<td>$3100.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Darren Elder</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>11 Jun 2019 <br><small>4.50 AM</small></td>
													
													<td>$5000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Deborah Angel</a>
														</h2>
													</td>
													<td>Cardiology</td>
													
													<td>4 Jan 2018 <br><small>9.40 AM</small></td>
													
													<td>$3300.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-04.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Sofia Brient</a>
														</h2>
													</td>
													<td>Urology</td>
													
													<td>5 Jul 2019 <br><small>12.59 AM</small></td>
													
													<td>$3500.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Marvin Campbell</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													
													<td>24 Jan 2019 <br><small>02.59 AM</small></td>
													
													<td>$3700.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-06.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Katharine Berthold</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													
													<td>23 Mar 2019 <br><small>02.50 PM</small></td>
													
													<td>$4000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-07.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Linda Tobin</a>
														</h2>
													</td>
													<td>Neurology</td>
													
													<td>14 Dec 2018 <br><small>01.59 AM</small></td>
													
													<td>$2000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-08.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Paul Richard</a>
														</h2>
													</td>
													<td>Dermatology</td>
													
													<td>11 Jan 2019 <br><small>02.59 AM</small></td>
													
													<td>$3000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-09.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. John Gibbs</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>21 Apr 2018 <br><small>02.59 PM</small></td>
													
													<td>$4100.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-10.jpg')}}" alt="User Image"></a>
															<a href="{{url('/admin-profile')}}">Dr. Olga Barlow</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>15 Feb 2018 <br><small>03.59 AM</small></td>
													
													<td>$3500.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
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
		
		<!-- Datatables JS -->
		<script src="{{url('Backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('Backend/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-doctor-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
@endsection