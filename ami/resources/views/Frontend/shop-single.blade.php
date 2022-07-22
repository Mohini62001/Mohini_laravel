@extends('Frontend.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Shop 2</title>
@endpush

    <!-- page-title -->
    <section class="page-title shop-single" style="background-image: url({{url('Frontend/images/background/page-title-4.jpg')}});">
        <div class="container">
            <div class="content-box">
                <h1>Single Shop</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- single-shop -->
    <section class="single-shop">
        <div class="container">
            <div class="products-details">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <div class="carousel-outer" data-wow-delay="0ms">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="{{url('Frontend/images/resource/shop/shop-single.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/resource/shop/shop-single.png')}}" alt=""></a></li>
                                    <li><a href="{{url('Frontend/images/resource/shop/shop-single-2.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/resource/shop/shop-single-2.png')}}" alt=""></a></li>
                                    <li><a href="{{url('Frontend/images/resource/shop/shop-single-3.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/resource/shop/shop-single-3.png')}}" alt=""></a></li>
                                    <li><a href="{{url('Frontend/images/resource/shop/shop-single.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/resource/shop/shop-single.png')}}" alt=""></a></li>
                                    <li><a href="{{url('Frontend/images/resource/shop/shop-single-2.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/resource/shop/shop-single-2.png')}}" alt=""></a></li>
                                    <li><a href="{{url('Frontend/images/resource/shop/shop-single-3.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/resource/shop/shop-single-3.png')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme centred">
                                    <li><img src="{{url('Frontend/images/resource/shop/thumb-1.jpg')}}" alt=""></li>
                                    <li><img src="{{url('Frontend/images/resource/shop/thumb-2.jpg')}}" alt=""></li>
                                    <li><img src="{{url('Frontend/images/resource/shop/thumb-3.jpg')}}" alt=""></li>
                                    <li><img src="{{url('Frontend/images/resource/shop/thumb-1.jpg')}}" alt=""></li>
                                    <li><img src="{{url('Frontend/images/resource/shop/thumb-2.jpg')}}" alt=""></li>
                                    <li><img src="{{url('Frontend/images/resource/shop/thumb-3.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h3 class="product-price">IV Automatic Edge Shaper and<br />Polisher</h3>
                            <div class="price">$8,900.00 - $17,000.00</div>
                            <div class="customer-reviews">
                                <ul class="rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half"></i></li>
                                </ul>
                                <div class="reviews"><a href="#">4.5 (20 Review)</a></div>
                            </div>
                            <div class="other-info">
                                <div class="categories-box">
                                    <ul>
                                        <li><h6>Category:</h6>&nbsp;</li>
                                        <li>Industry wood</li>
                                    </ul>
                                </div>
                                <div class="tags-box">
                                    <ul>
                                        <li><h6>Tags:</h6>&nbsp;</li>
                                        <li>Machin,</li>
                                        <li>factory</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <ul class="model">
                                    <li><h6>Model Number:</h6>&nbsp;</li>
                                    <li class="model-no">YH-1400-500</li>
                                </ul>
                                <ul class="brand">
                                    <li><h6>Brand:</h6>&nbsp;</li>
                                    <li>Henan, China</li>
                                </ul>
                            </div>
                            <div class="addto-cart-box clearfix">
                                <div class="item-quantity">
                                    <input class="quantity-spinner" type="text" value="2" name="quantity">
                                </div>
                                <a href="#" class="bye-btn">Buy Now</a>
                                <button type="button" class="cart-btn">Add to Card</button>
                            </div>
                            <div class="lower-content">
                                <div class="link-btn"><a href="#">Contact Agent</a></div>
                                <div class="text">
                                    <h5>Fast, Precision Stone Polishing</h5>
                                    <p>Produce in 1 hour what it takes 5 hours to do by hand with the PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher creates quality edges on granite, marble, and quartz from end to end unlike any other machine on the market.</p>
                                    <p>The PRO-EDGE® IV Polisher is a fine-tuned combination of electronics and hydraulics that shapes and polishes a variety of convex edges from 3/8" to 6" thick and flat edges from 3/8" to 4" thick and up to 12' long, as well as concave and ogee edges.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <div class="product-tab tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">DESCRIPTION</li>
                        <li class="tab-btn" data-tab="#tab-2">INFORMATION</li>
                        <li class="tab-btn" data-tab="#tab-3">REVIEWS (1)</li>
                        <li class="tab-btn" data-tab="#tab-4">Product Video</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab clearfix" id="tab-1">
                            <div class="inner-box">
                                <div class="top-content">
                                    <p>The user-friendly color touchscreen controls are intuitive and easy to operate. Managing material on the PRO-EDGE® IV Polisher is easy with the unique rubber surface. Stone surfaces are securely held polished side down with pneumatic hold-downs for exceptional polish quality. When the machine is finished, popup rollers make moving the material easy for a single operator, saving time and labor</p>
                                </div>
                                <div class="lower-content">
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-4.jpg')}}" alt=""></figure>
                                        <h3>Features & Benefits</h3>
                                        <ul>
                                            <li>Production: 12 feet per hour</li>
                                            <li>Stores up to 70 repeatable Convex, Concave, and Ogee edge profiles</li>
                                            <li>Simple programming and operations</li>
                                            <li>Ability to Bullnose tile</li>
                                            <li>Profile shaping and polishing thickness from 3/8” to 6”</li>
                                            <li>Advanced help and diagnostic capabilities</li>
                                        </ul>
                                    </div>
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-5.jpg')}}" alt=""></figure>
                                        <h3>Precision Stone Polishing</h3>
                                        <ul>
                                            <li>Produce in 1 hour what it takes 5 hours to do by hand with the</li>
                                            <li>PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher</li>
                                            <li>Creates quality edges on granite, marble, and quartz from end to end<br />unlike any other machine on the market.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab clearfix" id="tab-2">
                            <div class="inner-box">
                                <div class="top-content">
                                    <p>The user-friendly color touchscreen controls are intuitive and easy to operate. Managing material on the PRO-EDGE® IV Polisher is easy with the unique rubber surface. Stone surfaces are securely held polished side down with pneumatic hold-downs for exceptional polish quality. When the machine is finished, popup rollers make moving the material easy for a single operator, saving time and labor</p>
                                </div>
                                <div class="lower-content">
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-4.jpg')}}" alt=""></figure>
                                        <h3>Features & Benefits</h3>
                                        <ul>
                                            <li>Production: 12 feet per hour</li>
                                            <li>Stores up to 70 repeatable Convex, Concave, and Ogee edge profiles</li>
                                            <li>Simple programming and operations</li>
                                            <li>Ability to Bullnose tile</li>
                                            <li>Profile shaping and polishing thickness from 3/8” to 6”</li>
                                            <li>Advanced help and diagnostic capabilities</li>
                                        </ul>
                                    </div>
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-5.jpg')}}" alt=""></figure>
                                        <h3>Precision Stone Polishing</h3>
                                        <ul>
                                            <li>Produce in 1 hour what it takes 5 hours to do by hand with the</li>
                                            <li>PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher</li>
                                            <li>Creates quality edges on granite, marble, and quartz from end to end<br />unlike any other machine on the market.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="tab clearfix" id="tab-3">
                            <div class="inner-box">
                                <div class="top-content">
                                    <p>The user-friendly color touchscreen controls are intuitive and easy to operate. Managing material on the PRO-EDGE® IV Polisher is easy with the unique rubber surface. Stone surfaces are securely held polished side down with pneumatic hold-downs for exceptional polish quality. When the machine is finished, popup rollers make moving the material easy for a single operator, saving time and labor</p>
                                </div>
                                <div class="lower-content">
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-4.jpg')}}" alt=""></figure>
                                        <h3>Features & Benefits</h3>
                                        <ul>
                                            <li>Production: 12 feet per hour</li>
                                            <li>Stores up to 70 repeatable Convex, Concave, and Ogee edge profiles</li>
                                            <li>Simple programming and operations</li>
                                            <li>Ability to Bullnose tile</li>
                                            <li>Profile shaping and polishing thickness from 3/8” to 6”</li>
                                            <li>Advanced help and diagnostic capabilities</li>
                                        </ul>
                                    </div>
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-5.jpg')}}" alt=""></figure>
                                        <h3>Precision Stone Polishing</h3>
                                        <ul>
                                            <li>Produce in 1 hour what it takes 5 hours to do by hand with the</li>
                                            <li>PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher</li>
                                            <li>Creates quality edges on granite, marble, and quartz from end to end<br />unlike any other machine on the market.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="tab clearfix" id="tab-4">
                            <div class="inner-box">
                                <div class="top-content">
                                    <p>The user-friendly color touchscreen controls are intuitive and easy to operate. Managing material on the PRO-EDGE® IV Polisher is easy with the unique rubber surface. Stone surfaces are securely held polished side down with pneumatic hold-downs for exceptional polish quality. When the machine is finished, popup rollers make moving the material easy for a single operator, saving time and labor</p>
                                </div>
                                <div class="lower-content">
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-4.jpg')}}" alt=""></figure>
                                        <h3>Features & Benefits</h3>
                                        <ul>
                                            <li>Production: 12 feet per hour</li>
                                            <li>Stores up to 70 repeatable Convex, Concave, and Ogee edge profiles</li>
                                            <li>Simple programming and operations</li>
                                            <li>Ability to Bullnose tile</li>
                                            <li>Profile shaping and polishing thickness from 3/8” to 6”</li>
                                            <li>Advanced help and diagnostic capabilities</li>
                                        </ul>
                                    </div>
                                    <div class="single-item">
                                        <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/shop-single-5.jpg')}}" alt=""></figure>
                                        <h3>Precision Stone Polishing</h3>
                                        <ul>
                                            <li>Produce in 1 hour what it takes 5 hours to do by hand with the</li>
                                            <li>PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher</li>
                                            <li>Creates quality edges on granite, marble, and quartz from end to end<br />unlike any other machine on the market.</li>
                                        </ul>
                                    </div>
                                </div>
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
                                <h3><a href="shop-single">industrial Motor decanter</a></h3>
                                <div class="link-btn"><a href="shop-single">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-2.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single">Water jet pumps</a></h3>
                                <div class="link-btn"><a href="shop-single">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single-shop end -->


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