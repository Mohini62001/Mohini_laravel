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
                                        <h1>Manage Product Deatails</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Manage Product Deatails</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row editable-wrapper">
                            <div class="col-lg-12 ">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="table" class="table display responsive nowrap table-light table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">Product Img</th>
                                                        <th scope="col">Product Color</th>
                                                        <th scope="col">Product Color(French)</th>
                                                        <th scope="col">Product Size</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!$product_child_arr->isEmpty())
                                                    @foreach($product_child_arr as $data)
                                                        <tr>
                                                        <th scope="row"><?php echo $data->id ?></th>
                                                        <td><img src="{{asset('Admin/upload/product/product_child/' . $data->pro_img)}}" height="50px" width="50px"/></td>
                                                        <td><?php echo $data->color?></td>
                                                        <td><?php echo $data->color_fr?></td>
                                                        <td><?php echo $data->size?></td>
                                                        <td class="text-left">
                                                            <div class="actions">
                                                                <a class="btn btn-sm bg-success-light"  href="{{url('product/edit_product_child/'. $data->id)}}">
                                                                    <i class="fe fe-edit"></i> Edit Product
                                                                </a><br>
                                                                <a  href="{{url('product/destroy_product_child/'. $data->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm bg-danger-light">
                                                                    <i class="fe fe-trash"></i> Delete Product
                                                                </a><br>
                                                                
                                                            </div>
                                                        </td>
                                                        
                                                        </tr>
                                                    @endforeach  
                                                    @else
                                                        <p class="text-danger mt-2" style="padding-left:450px;">No Products Available</p>
                                                    @endif
                                                    
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            @endsection