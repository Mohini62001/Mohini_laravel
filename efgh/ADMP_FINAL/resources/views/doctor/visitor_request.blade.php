@extends('doctor.Layout.main_layout') 	
@section('main_container')
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">All Requests</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">All Requests For Favourite Doctor</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
        <div class="content">
            <div class="container-fluid p-3">
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            
                            @include('doctor/Layout/company-widget');
                            
                        </div>
                        <!-- /Profile Sidebar -->
                        
                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card card-table">
                            <div class="card-body row">
                                <div class="col-md-12 col-lg-12 p-3" >
                                <h5 align="center"><u>Company Request</u></h5>
                                    <div class="table-responsive  mt-2 mb-2">
                                        <table id="table" class="datatable table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Visiting Card</th>
                                                    <th>Company Name</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!$company_visitor_arr->isEmpty())
                                                @foreach($company_visitor_arr as $data)
                                                <tr>
                                                    <td><?php echo $data->id?></td>
                                                    <td><img src="{{asset('upload/visitingcard/' . $data->visiting_card)}}" height="50px" width="50px"/></td>
                                                    <td><?php echo $data->company_id?></td>
                                                    <td class="text-right">
                                                        <div class="actions">
                                                            <a  href="{{url('doctor_approve_company/'.$data->id)}}" class="btn btn-sm bg-danger-light">
                                                                <i class="fe fe-trash"></i> <?php echo $data->status?>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                    <p class="text-danger mt-2">No Request Available</p>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <br>
                                
                                <br>
                                <br>
                                <div class="col-md-12 col-lg-12 p-3" >
                                    <hr>
                                    <h5 align="center"><u>Manager Request</u></h5>
                                    <div class="table-responsive mt-2 mb-2">
                                        <table id="table1" class="datatable table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Visiting Card</th>
                                                    <th>Manager Name</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!$manager_visitor_arr->isEmpty())
                                                @foreach($manager_visitor_arr as $data1)
                                                <tr>
                                                    <td><?php echo $data1->id?></td>
                                                    <td><img src="{{asset('upload/visitingcard/' . $data1->visiting_card)}}" height="50px" width="50px"/></td>
                                                    <td><?php echo $data1->manager_id?></td>
                                                    <td class="text-right">
                                                        <div class="actions">
                                                            <a  href="{{url('doctor_approve_manager/'.$data1->id)}}" class="btn btn-sm bg-danger-light">
                                                                <i class="fe fe-trash"></i> <?php echo $data1->status?>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                    <p class="text-danger mt-2">No Request Available</p>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <br>
                                
                                <br>
                                <br>
                                <div class="col-md-12 col-lg-12 p-3" >
                                    <hr>
                                    <h5 align="center"><u>MR Request</u></h5>
                                    <div class="table-responsive mt-2 mb-2">
                                        <table id="table2" class="datatable table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Visiting Card</th>
                                                    <th>MR Name</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(!$mr_visitor_arr->isEmpty())
                                                @foreach($mr_visitor_arr as $data2)
                                                <tr>
                                                    <td><?php echo $data2->id?></td>
                                                    <td><img src="{{asset('upload/visitingcard/' . $data2->visiting_card)}}" height="50px" width="50px"/></td>
                                                    <td><?php echo $data2->mr_id?></td>
                                                    <td class="text-right">
                                                    <div class="actions">
                                                        <a  href="{{url('doctor_approve_mr/'.$data2->id)}}" class="btn btn-sm bg-danger-light">
                                                            <i class="fe fe-trash"></i> <?php echo $data2->status?>
                                                        </a>
                                                    </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @else
                                                <p class="text-danger mt-2">No Request Available</p>
                                            @endif  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
				</div>
			</div>

		</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/blank-page')}}  30 Nov 2019 04:12:20 GMT -->
</html>
@endsection	