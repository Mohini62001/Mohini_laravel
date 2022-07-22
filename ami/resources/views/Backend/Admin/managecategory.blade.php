@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content') 
@push('title')
   <title>Manage Category</title>
@endpush

 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Category</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Manage Category</h6>
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
                                            <th>Category_Name</th>
                                            <th>Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
									
									<tbody>
									<?php
									
									foreach($cate_arr as $data)
									{
									?>
									
									<tr>
									<td><?php echo $data->id?></td>
									<td><?php echo $data->category_name?></td>
									<td><a href="{{url('addcategory/'.$data->id)}}" class="btn btn-danger">Delete</a></td>
									</tr>
									<?php
									}
									?>
									</tbody>
									
									
									   @endsection