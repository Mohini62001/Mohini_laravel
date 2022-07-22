@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Add Product</title>
@endpush
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Product Advertisement</h4>
                    </div>
                </div>
                <form method="post" action="{{url('/addproduct')}}" enctype="multipart/form-data">
                    @csrf
					<div class="card-box">
                        <h3 class="card-title">Add Product</h3>
						
						<br>
						<br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block"  type="file" name="img">
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
                                                <input type="text" class="form-control floating" name="productname"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product_Price</label>
                                                <input type="text" class="form-control floating" name="productprice">
                                            </div>
                                        </div>
                                        
										
										 <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select  name="cate_id" class="select form-control floating">
                                                        <option value="">Select Category</option>
														
                                                    </select>
                                                </div>
                                            </div>
										
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Prouct_Description</label>
                                                <textarea name="description" class="form-control floating" name="description"></textarea>
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
                                            <input type="text" class="form-control" name="productlink">
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
                        <button class="btn btn-primary submit-btn" type="submit" name="submit" value="Send">Add Product</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
        @endsection