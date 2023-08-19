@extends('Admin.Layout.main_layout') 	
@section('main_container')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                        <h1>Manage Product</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Manage Product</li>
                                                <div style="padding-top:25px">
                                                    <a href="{{url('/product/add_product')}}" class="btn btn-primary btn-lg btn-block-sm" >Add Product</a>
                                                </div>
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
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Product URL</th>
                                                        <th scope="col">Meta Title</th>
                                                        <th scope="col">Meta Keywords</th>
                                                        <th class="text-center">Product Details</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @if(!$product_arr->isEmpty())
                                                    @foreach($product_arr as $data)
                                                        <tr>
                                                        <th scope="row"><?php echo $data->id ?></th>
                                                        <td><img src="{{asset('Admin/upload/product/' . $data->product_img)}}" height="50px" width="50px"/></td>
                                                        <td><?php echo $data->product_name?></td>
                                                        <td><?php echo $data->url?></td>
                                                        <td><?php echo $data->meta_title?></td>
                                                        <td><?php echo $data->keywords?></td>
                                                        <td class="text-left">
                                                            <div class="actions">
                                                                <a  href="{{url('product/add_product_child/'. $data->id)}}" class="btn btn-sm bg-danger-light">
                                                                    <i class="fe fe-edit"></i> Add Product Details 
                                                                </a>
                                                                <a  href="{{url('product/manage_product_child/'. $data->id)}}" class="btn btn-sm bg-danger-light">
                                                                    <i class="fe fe-edit"></i>View Details
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <div class="actions">
                                                                <a class="btn btn-success"  href="{{url('product/edit_product/'.$data->id)}}">
                                                                    <i class="fe fe-edit"></i> Edit Product
                                                                </a><br><br>
                                                                <a class="delete btn btn-danger;" href="{{url('product/destroy_product/'.$data->id)}}"  >
                                                                    <i class="fe fe-trash"></i>Delete Product
                                                                </a>
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

<script>
    $('.delete').on('click',function (e) {
        e.preventDefault();
        var self = $(this);
        console.log(self.data('title'));
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                location.href = self.attr('href');
            }
            })
    })
</script>
            @endsection
           
