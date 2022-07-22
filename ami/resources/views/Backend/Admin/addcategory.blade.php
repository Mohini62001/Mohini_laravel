@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Add Category</title>
@endpush

 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Categories</h4>
                    </div>
                </div>
         <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="card-title">Add Category of Product</h4>
                            <form method="post" action="{{url('/addcategory')}}">
							@csrf
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category_name" class="form-control">
                                </div>
                               
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" name="submit" value="Send">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				
       @endsection