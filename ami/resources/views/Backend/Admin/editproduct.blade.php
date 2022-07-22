@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Edit Product Advertisement</title>
@endpush
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Product Advertisement</h4>
                    </div>
                </div>
                <form method="post" action="{{url('/editpro/{id}')}}" enctype="multipart/form-data">
                    @csrf
					<div class="card-box">
                        <h3 class="card-title">Add Product</h3>
						@if(session()->has('success'))
						<br>
						<i class="alert alert-success">{{session('success')}}</i>
						<br>
						@endif
						<br>
						<br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block"  type="file" name="img" value="{{asset('upload/product/'.$fetch->img)}}">
									<img src="{{asset('upload/product/'.$fetch->img)}}" height="50px" width="50px">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="img">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
									
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product_Name</label>
                                                <input type="text" class="form-control floating" name="productname" value="<?php echo $fetch->productname?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product_Price</label>
                                                <input type="text" class="form-control floating" name="productprice" value="<?php echo $fetch->productprice?>">
                                            </div>
                                        </div>
                                        
										<div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Category</label>
                                                    <select  name="cate_id" class="select form-control floating" value="<?php echo $fetch->category_name?>" >
                                                        <option value="">Select Category</option>
														<?php foreach($category_id_arr as $data)
							                              {
															  if($data->id==$fetch->cate_id)
															  {
								                        ?>
                                                        <option value="<?php echo $data->id;?>"selected>
                                                       <?php echo $data->category_name;?></option>
								                       <?php 
															  }
															  else
															  {
														?>
														<option value="<?php echo $data->id;?>">
                                                       <?php echo $data->category_name;?></option>
															  <?php
															  }
														  }
														  ?>
															  
                                                    </select>
                                            </div>
                                        </div>
										
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Prouct_Description</label>
                                                <textarea name="description" class="form-control floating"  value=""><?php echo $fetch->description?></textarea>
                                            </div> 
                                        </div>
										
									 <div class="col-md-6">
										 <div class="form-group row">
                                         <label class="focus-label">Product_Link</label>
                                            <div class="col-md-10">
                                           <div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">https://</span>
											</div>
                                            <input type="text" class="form-control" name="productlink" value="<?php echo $fetch->productlink?>">
                                        </div>
                                    </div>
                                </div>
								</div>	
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    
                 
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="submit" name="update" value="Save">Add Product</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
        @endsection