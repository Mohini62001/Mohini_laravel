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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Edit Category</li>
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
                                                        <h5 class="mb-0 py-2">Edit Category</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form action="{{url('/category/edit_category/'.$fetch->id )}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body row">
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Category Name</label>
                                                                    <input type="text" class="form-control" name="category_name" value="<?php echo $fetch->category_name ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Short Title</label>
                                                                    <input type="text" class="form-control" name="short_title" value="<?php echo $fetch->short_title ?>">
                                                                </div>
                                                               <div class="form-group">
                                                                    <label>Short Description</label>
                                                                    <textarea input type="text" class="form-control" name="short_description"><?php echo $fetch->short_description ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sub Category</label>
                                                                    <select class="form-control"  name="parent_id">
                                                                        <option value="">Select Category</option>
                                                                        <?php
                                                                            foreach($cate_arr as $data)
                                                                            {
                                                                                if($data->id==$fetch->parent_id)
                                                                                {
                                                                        ?>
                                                                        <option value="<?php echo $data->id;?>" selected>
                                                                            <?php echo $data->category_name ?></option>
                                                                        <?php
                                                                                }
                                                                                elseif($data->parent_id=='0')
                                                                                {
                                                                        ?>
                                                                        <option value="0" selected>Sports</option>
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
                                                                <div class="form-group">
                                                                    <label>Description Title</label>
                                                                    <input type="text" class="form-control" name="description_title" value="<?php echo $fetch->description_title ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea  type="text" class="form-control" name="description"><?php echo $fetch->description ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Meta Title</label>
                                                                    <input type="text" class="form-control datemask" name="meta_title" value="<?php echo $fetch->meta_title ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Meta Description</label>
                                                                    <input type="text" class="form-control creditcard" name="meta_description" value="<?php echo $fetch->meta_description ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keywords</label>
                                                                    <input type="text" class="form-control inputtags" name="keywords" value="<?php echo $fetch->keywords ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="text" class="form-control inputtags" name="url" value="<?php echo $fetch->url ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Category Img</label>
                                                                    <div class="input-group">
                                                                        <input type="file" class="form-control" name="category_img[]" multiple>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Order</label>
                                                                    <input type="text" class="form-control" name="order" value="<?php echo $fetch->order ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Category Name (French)</label>
                                                                    <input type="text" class="form-control" name="category_name_fr" value="<?php echo $fetch->category_name_fr ?>">
                                                                </div> 
                                                                <div class="form-group" >
                                                                    <label>Short Title (French)</label>
                                                                    <input type="text" class="form-control" name="short_title_fr" value="<?php echo $fetch->short_title_fr ?>">
                                                                </div>
                                                                <div class="form-group" >
                                                                    <label>Short Description (French)</label>
                                                                    <textarea input type="text" class="form-control" name="short_description_fr"><?php echo $fetch->short_description_fr ?></textarea>
                                                                </div>
                                                                <div class="form-group" >
                                                                    <label>Sub Category (French)</label>
                                                                        <select class="form-control"  name="parent_id">
                                                                            <option value="">Select Category</option>
                                                                        
                                                                            <?php
                                                                                foreach($cate_arr as $data)
                                                                                {
                                                                                    if($data->id==$fetch->parent_id)
                                                                                    {
                                                                            ?>
                                                                            <option value="<?php echo $data->id;?>" selected>
                                                                                <?php echo $data->category_name_fr?></option>
                                                                            <?php
                                                                                    }
                                                                                    elseif($data->parent_id=='0')
                                                                                    {
                                                                            ?>
                                                                            <option value="0" selected>Sports</option>
                                                                            <?php
                                                                                    }
                                                                                    else
                                                                                    {
                                                                            ?>
                                                                            <option value="<?php echo $data->id;?>">
                                                                                <?php echo $data->category_name_fr;?></option>
                                                                            <?php
                                                                                    }
                                                                                }
                                                                                
                                                                            ?>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description Title (French)</label>
                                                                    <input type="text" class="form-control" name="description_title_fr" value="<?php echo $fetch->description_title_fr ?>">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Description  (French)</label>
                                                                    <textarea input type="text" class="form-control" name="description_fr"><?php echo $fetch->description_fr ?></textarea>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Meta Title (French)</label>
                                                                    <input type="text" class="form-control" name="meta_title_fr" value="<?php echo $fetch->meta_title_fr ?>">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Meta Description  (French)</label>
                                                                    <input type="text" class="form-control" name="meta_description_fr" value="<?php echo $fetch->meta_description_fr ?>">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Keywords (French)</label>
                                                                    <input type="text" class="form-control" name="keywords_fr" value="<?php echo $fetch->keywords_fr ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Banner Img</label>
                                                                    <div class="input-group">
                                                                        <input type="file" class="form-control" name="banner_img[]" multiple>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Home Category Img</label>
                                                                    <div class="input-group">
                                                                        <input type="file" class="form-control" name="home_cate_img[]" multiple>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-3 form-group" >
                                                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Send">Update Category</button>
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