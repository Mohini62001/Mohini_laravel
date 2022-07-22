
@extends('Frontend.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Shop</title>
@endpush
    

    <!-- shop-style-two -->
    <section class="shop-style-two shop-page-2">
        <div class="container">
            
            <div class="upper-box">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="search-widget sidebar-widget">
                                <div class="search-box">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search" required="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="categories-widget sidebar-widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="shop-categories">
                                    <li><a href="#">Non Woven Products</a></li>
                                    <li><a href="#">LDPE Products</a></li>
                                    <li><a href="#">Paper Products</a></li>
                                    <li><a href="#">Personal Protective Equipment (PPE)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 product-block">
                        <div class="product-block-area centred">
                            <div class="row">
                              <?php
									foreach($front_arr as $data)
									{
									?>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-two">
                                        <div class="inner-box">
                                            <div class="image-holder">
                                                <figure class="image-box"><img src="{{asset('upload/product/' . $data->img)}}" alt="" style="height:190px;width:150px"; ></figure>
                                               
                                            </div>
                                            <div class="lower-content">
                                                <div class="price">
                                                    <span><?php echo $data->productprice?></span>
                                                    
                                                </div>
                                                <ul class="rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half"></i></li>
                                                </ul>
                                                <h4><a href="shop-single"><?php echo $data->productname?></a></h4>
                                                <div class="btn-box"><a href="<?php echo $data->productlink?>">Buy Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php
									}
									?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-product">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-1.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single.html">industrial Motor decanter</a></h3>
                                <div class="link-btn"><a href="shop-single.html">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-2.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single.html">Water jet pumps</a></h3>
                                <div class="link-btn"><a href="shop-single.html">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-style-two end -->



    <!-- shipping-service -->
    <section class="shipping-service">
        <div class="container">
            <div class="outer-container clearfix">
                <div class="single-item wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-truck"></i></div>
                                <h4>Free Shipping</h4>
                                <div class="text">Orders over $500.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="far fa-thumbs-up"></i></div>
                                <h4>100% Made In US</h4>
                                <div class="text">Respecting natur</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-lock"></i></div>
                                <h4>Safety And Quality</h4>
                                <div class="text">Delivery within 3-4<br />business days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping-service end -->


   @endsection