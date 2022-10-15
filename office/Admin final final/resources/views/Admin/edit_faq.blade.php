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
                                        <h1>FAQ</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                FAQ
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Edit FAQ
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
                                                        <h5 class="mb-0 py-2">Edit FAQ</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        
                                                            <div class="card-body row">
                                                            
                                                                <div class="col-12 col-md-12 col-lg-12">
                                                                    <form action="{{url('/faq/edit/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                        <div class="form-group">
                                                                            <label>Title</label>
                                                                            <input type="text" class="form-control" name="Title" value="<?php echo $fetch->Title ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Answer</label>
                                                                            <input type="text" class="form-control" name="Answer" value="<?php echo $fetch->Answer ?>">
                                                                        </div>
                                                                        <div class="col-6 col-md-8 col-lg-8 form-group" >
                                                                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Send">Update FAQ</button>
                                                                        </div> 
                                                                    </form>
                                                                </div>
                                                                <div class="col-12 col-md-12 col-lg-12">
                                                                    
                                                                </div>
                                                               
                                                                    
                                                                
                                                            </div>
                                                        
                                                            
                                                            
                                                        </div>   
                                                    
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