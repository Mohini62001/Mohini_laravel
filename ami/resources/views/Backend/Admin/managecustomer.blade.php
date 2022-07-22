@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content') 
@push('title')
   <title>Manage Customer</title>
@endpush

 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Contact</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Manage Customer</h6>
                                <p>
									@if(Session('success'))
									<i class="alert alert-success">{{session('success')}}</i>
									@endif
								</p>
								<div class="table-responsive">
									<table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>id</th>
											<th>img</th>
                                            <th>Name</th>
											<th>Username</th>
											<th>Email</th>
											<th>Mobileno</th>
											<th>Address</th>
											<th>Edit</th>
											<th>Delete</th>
											<th>Status</th>
											
                                        
                                            
                                            
                                        </tr>
                                    </thead>
									
									<tbody>
									<?php
									foreach($customer_arr as $data)
									{
									?>
									
									<tr>
									<td><?php echo $data->id?></td>
									<td><img src="{{asset('upload/customer/' . $data->img)}}" height="50px" width="50px"/></td>
					                <td><?php echo $data->name?></td>
									<td><?php echo $data->username?></td>
									<td><?php echo $data->email?></td>
									<td><?php echo $data->mobileno?></td>
									<td><?php echo $data->address?></td>
									<td><a href="#" class="btn btn-primary">Edit</td>
									<td><a href="{{url('contact/'.$data->id)}}" class="btn btn-danger">Delete</td>
									<td><a href="#" class="btn btn-primary">Status</td>
									</tr>
									
									<?php
									}
									?>
									</tbody>
									
									
									   @endsection