@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content') 
@push('title')
   <title>Manage Cartype</title>
@endpush

 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Cartype</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Manage Cartype</h6>
								
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
									<td><?php echo $data->id ?></td>
									<td><?php echo $data->ctype_name ?></td>
									<td><a href="{{url('addcartype/'.$data->id)}}" class="btn btn-danger">Delete</a></td>
									</tr>
									  <?php
									  }
									  ?>
									
									</tbody>
									
									
									   @endsection