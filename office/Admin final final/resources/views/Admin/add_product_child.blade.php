@extends('Admin.Layout.main_layout') 	
@section('main_container')
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Product</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                Product
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Add Product Details
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            
                                            
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Add Product Details</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form action="{{url('/product/add_product_child/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body row">
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Product Color</label>
                                                                    <input type="text" class="form-control" name="color">
                                                                    @if($errors->has('color'))	
                                                                        <span class="text-danger" >{{($errors->first('color'))}}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Product Size</label>
                                                                    <input type="text" class="form-control" name="size">
                                                                    @if($errors->has('size'))	
                                                                        <span class="text-danger" >{{($errors->first('size'))}}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Product Color (French)</label>
                                                                    <input type="text" class="form-control" name="color_fr">
                                                                    @if($errors->has('color_fr'))	
                                                                        <span class="text-danger" >{{($errors->first('color_fr'))}}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Product Img</label>
                                                                    <div class="input-group">
                                                                    <input type="file" class="form-control" name="pro_img" >
                                                                    @if($errors->has('pro_img'))	
                                                                        <span class="text-danger" >{{($errors->first('pro_img'))}}</span>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-3 form-group" >
                                                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Send">Add Details</button>
                                                            </div>
                                                        </div>   
                                                    </form>
                                                    </div>
                                                </div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
           @endsection