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
                                        <h1>Category</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                Category
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Add Category</li>
                                            </ol>
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
                                                        <h5 class="mb-0 py-2">Add Category</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form action="{{url('/category/add_category')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body row">
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Category Name</label>
                                                                    <input type="text" class="form-control" name="category_name">
                                                                    @if ($errors->has('category_name'))
                                                                        <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                                                    @endif
                                                                </div>
                                                               <div class="form-group">
                                                                    <label>Short Title</label>
                                                                    <input type="text" class="form-control" name="short_title">
                                                                    @if ($errors->has('short_title'))
                                                                        <span class="text-danger">{{ $errors->first('short_title') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Short Description</label>
                                                                    <textarea input type="text" class="form-control" name="short_description"></textarea>
                                                                    @if ($errors->has('short_description'))
                                                                        <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sub Category</label>
                                                                    <select class="form-control"  name="parent_id">
                                                                        <option value="">Select Category</option>
                                                                        <option value="0">Sports</option>
                                                                        <?php
                                                                        foreach($cate_arr as $data)
                                                                        {
                                                                        ?>
                                                                        <option value="<?php echo $data->id;?>">
                                                                            <?php echo $data->category_name ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    @if ($errors->has('parent_id'))
                                                                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description Title</label>
                                                                    <input type="text" class="form-control" name="description_title">
                                                                    @if ($errors->has('description_title'))
                                                                        <span class="text-danger">{{ $errors->first('description_title') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea  type="text" class="form-control" name="description"></textarea>
                                                                    @if ($errors->has('description'))
                                                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Meta Title</label>
                                                                    <input type="text" class="form-control datemask" name="meta_title">
                                                                    @if ($errors->has('meta_title'))
                                                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Meta Description</label>
                                                                    <input type="text" class="form-control creditcard" name="meta_description">
                                                                    @if ($errors->has('meta_description'))
                                                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keywords</label>
                                                                    <input type="text" class="form-control inputtags" name="keywords">
                                                                    @if ($errors->has('keywords'))
                                                                        <span class="text-danger">{{ $errors->first('keywords') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="text" class="form-control inputtags" name="url">
                                                                    @if ($errors->has('url'))
                                                                        <span class="text-danger">{{ $errors->first('url') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Category Img</label>
                                                                    <div class="input-group">
                                                                    <input type="file" class="form-control" name="category_img[]" multiple>
                                                                    @if ($errors->has('category_img'))
                                                                        <span class="text-danger">{{ $errors->first('category_img') }}</span>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Order</label>
                                                                    <input type="text" class="form-control" name="order">
                                                                    @if ($errors->has('order'))
                                                                        <span class="text-danger">{{ $errors->first('order') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Category Name (French)</label>
                                                                    <input type="text" class="form-control" name="category_name_fr">
                                                                    @if ($errors->has('category_name_fr'))
                                                                        <span class="text-danger">{{ $errors->first('category_name_fr') }}</span>
                                                                    @endif
                                                                </div> 
                                                                <div class="form-group" >
                                                                    <label>Short Title (French)</label>
                                                                    <input type="text" class="form-control" name="short_title_fr">
                                                                    @if ($errors->has('short_title_fr'))
                                                                        <span class="text-danger">{{ $errors->first('short_title_fr') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group" >
                                                                    <label>Short Description (French)</label>
                                                                    <textarea input type="text" class="form-control" name="short_description_fr"></textarea>
                                                                    @if ($errors->has('short_description_fr'))
                                                                        <span class="text-danger">{{ $errors->first('short_description_fr') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group" >
                                                                    <label>Sub Category (French)</label>
                                                                    <select class="form-control"  name="child_id">
                                                                        <option value="">Select Category</option>
                                                                        <option value="0">Sports</option>
                                                                        <?php
                                                                        foreach($cate_arr as $data)
                                                                        {
                                                                        ?>
                                                                        <option value="<?php echo $data->id;?>">
                                                                            <?php echo $data->category_name_fr ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    @if ($errors->has('child_id'))
                                                                        <span class="text-danger">{{ $errors->first('child_id') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description Title (French)</label>
                                                                    <input type="text" class="form-control" name="description_title_fr">
                                                                    @if ($errors->has('description_title_fr'))
                                                                        <span class="text-danger">{{ $errors->first('description_title_fr') }}</span>
                                                                    @endif
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Description  (French)</label>
                                                                    <textarea input type="text" class="form-control" name="description_fr"></textarea>
                                                                    @if ($errors->has('description_fr'))
                                                                        <span class="text-danger">{{ $errors->first('description_fr') }}</span>
                                                                    @endif
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Meta Title (French)</label>
                                                                    <input type="text" class="form-control" name="meta_title_fr">
                                                                    @if ($errors->has('meta_title_fr'))
                                                                        <span class="text-danger">{{ $errors->first('meta_title_fr') }}</span>
                                                                    @endif
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Meta Description  (French)</label>
                                                                    <input type="text" class="form-control" name="meta_description_fr">
                                                                    @if ($errors->has('meta_description_fr'))
                                                                        <span class="text-danger">{{ $errors->first('meta_description_fr') }}</span>
                                                                    @endif
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Keywords (French)</label>
                                                                    <input type="text" class="form-control" name="keywords_fr">
                                                                    @if ($errors->has('keywords_fr'))
                                                                        <span class="text-danger">{{ $errors->first('keywords_fr') }}</span>
                                                                    @endif
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Banner Img</label>
                                                                    <div class="input-group">
                                                                    <input type="file" class="form-control" name="banner_img[]" multiple>
                                                                    @if ($errors->has('banner_img'))
                                                                        <span class="text-danger">{{ $errors->first('banner_img') }}</span>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Home Category Img</label>
                                                                    <div class="input-group">
                                                                    <input type="file" class="form-control" name="home_cate_img[]" multiple>
                                                                    @if ($errors->has('home_cate_img'))
                                                                        <span class="text-danger">{{ $errors->first('home_cate_img') }}</span>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-3 form-group" >
                                                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Send">Add Category</button>
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