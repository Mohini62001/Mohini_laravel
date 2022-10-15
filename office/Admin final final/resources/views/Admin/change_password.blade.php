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
                                        <h1>Change Password</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                Change Password
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Change Password
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
                                                        <h5 class="mb-0 py-2">Change Password</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        
                                                            <div class="card-body row">
                                                            
                                                                <div class="col-12 col-md-12 col-lg-12">
                                                                    <form action="{{url('/change_password')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                        <div class="form-group">
                                                                            <label for="password">Old Password</label>
                                                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="oldpassword" >
                                                                            @if($errors->has('oldpassword'))	
                                                                                <span class="text-danger" >{{($errors->first('oldpassword'))}}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password">New Password</label>
                                                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="newpassword" >
                                                                            @if($errors->has('newpassword'))	
                                                                                <span class="text-danger" >{{($errors->first('newpassword'))}}</span>
                                                                            @endif
                                                                            
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password-confirm">Confirm Password</label>
                                                                            <input id="password-confirm" type="password" class="form-control" name="confirm_password"  >
                                                                            @if($errors->has('confirm_password'))	
                                                                                <span class="text-danger" >{{($errors->first('confirm_password'))}}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-6 col-md-8 col-lg-8 form-group" >
                                                                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Send">Change Password</button>
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