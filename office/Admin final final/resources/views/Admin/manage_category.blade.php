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
                                        <h1>Manage Category</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Manage Category</li>
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
                                                        <th scope="col">Category Name</th>
                                                        <th scope="col">Short Title</th>
                                                        <th scope="col">Description Title</th>
                                                        <th scope="col">Category URL</th>
                                                        <th class="text-right">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @if(!$category_arr->isEmpty())
                                                    @foreach($category_arr as $data)
                                                        <tr>
                                                        <th scope="row"><?php echo $data->id ?></th>
                                                        <td><?php echo $data->category_name?></td>
                                                        <td><?php echo $data->short_title?></td>
                                                        <td><?php echo $data->description_title?></td>
                                                        <td><?php echo $data->url?></td>
                                                        <td class="text-right">
                                                            <div class="actions">
                                                                <a class="btn btn-sm bg-success-light"  href="{{url('category/edit_category/'.$data->id)}}">
                                                                    <i class="fe fe-edit"></i> Edit
                                                                </a>
                                                                <a  href="{{url('category/destroy_category/'. $data->id)}}" class="btn btn-sm bg-danger-light">
                                                                    <i class="fe fe-trash"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    @endforeach  
                                                    @else
                                                        <p class="text-danger mt-2" style="padding-left:450px;">No Category Available</p>
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