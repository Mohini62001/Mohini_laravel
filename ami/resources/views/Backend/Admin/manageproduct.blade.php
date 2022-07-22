@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content') 
@push('title')
   <title>Manage Product</title>
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
											<th>Category</th>
                                            <th>Product_Image</th>
											<th>Product_Name</th>
											<th>Product_Price</th>
											<th>Product_Description</th>
											<th>Product_Link</th>
											<th>Edit</th>
                                            <th>Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
									
									<tbody>
									<?php
									foreach($product_arr as $data)
									{
									?>
									<tr>
									<td><?php echo $data->id?></td>
									<td><?php echo $data->cate_id?></td>
									<td><img src="{{asset('upload/product/' . $data->img)}}" height="50px" width="50px"/></td>
					                <td><?php echo $data->productname?></td>
									<td><?php echo $data->productprice?></td>
									<td><?php echo $data->description?></td>
								    <td><?php echo $data->productlink?></td>
									<td><a href="{{url('editpro/'.$data->id)}}" class="btn btn-primary">Edit</a></td>
									<td><a href="{{url('addproduct/'. $data->id)}}" class="btn btn-danger">Delete</a></td>
									<td><a href="" class="btn btn-primary">Available/Not available</a></td>
									</tr>
									<?php
									}
									?>
									</tbody>
									
									
									   @endsection