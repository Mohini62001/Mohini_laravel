
@extends('Frontend.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Home</title>
@endpush

    <!-- main-slider -->
    <section class="main-slider">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide" style="background-image:url({{url('Frontend/images/main-slider/slider-1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h5>Factory</h5>
                                <h1>The best Factory Solution</h1>
                                <div class="text">Industry is the production of goods or related services<br />within an economy.</div>
                                <div class="button-box">
                                    <div class="link-button"><a href="#">Get Solution</a></div>
                                    <div class="video-button"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{url('Frontend/images/main-slider/slider-2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h5>Factory</h5>
                                <h1>The best Factory Solution</h1>
                                <div class="text">Industry is the production of goods or related services<br />within an economy.</div>
                                <div class="button-box">
                                    <div class="link-button"><a href="#">Get Solution</a></div>
                                    <div class="video-button"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{url('Frontend/images/main-slider/slider-3.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h5>Factory</h5>
                                <h1>The best Factory Solution</h1>
                                <div class="text">Industry is the production of goods or related services<br />within an economy.</div>
                                <div class="button-box">
                                    <div class="link-button"><a href="#">Get Solution</a></div>
                                    <div class="video-button"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->


    <!-- weare-section -->
    <section class="weare-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <div class="title-box">
                            <h2>Who We Are</h2>
                            <div class="text">The company concentrated on its core business - developing land for industrial estates and ready-made standard factory for sale and rent in industrial estates</div>
                        </div>
                        <div class="inner-box clearfix" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                            <div class="single-item">
                                <div class="item">
                                    <div class="icon-box"><i class="icon flaticon-industry"></i></div>
                                    <div class="text">Export in any country</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 inner-column">
                    <div class="inner-content wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h2>Safety Product </h2>
                            <h3>workers of the world unite</h3>
                            <figure class="icon-box"><img src="{{url('Frontend/images/icons/gear-1.png')}}" alt=""></figure>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- weare-section end -->

    <!-- service-section -->
    <section class="service-section">
        <div class="container">
            <div class="sec-title centred">
                <h1>Market Solution Provide</h1>
                <p>Our experienced staff, combined with our global network, allow us to provide the<br />support you need</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-single"><img src="{{url('Frontend/images/resource/service-1.jpg')}}" alt=""></a></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-factory"></i></div>
                                <h3><a href="blog-single">Oil & Gas Energy</a></h3>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-single"><img src="{{url('Frontend/images/resource/service-2.jpg')}}" alt=""></a></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-oil"></i></div>
                                <h3><a href="blog-single">Manufacturing & Fabrication</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-single"><img src="{{url('Frontend/images/resource/service-3.jpg')}}" alt=""></a></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-nuclear-plant"></i></div>
                                <h3><a href="blog-single">Chemical & Farma</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-single"><img src="{{url('Frontend/images/resource/service-4.jpg')}}" alt=""></a></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-factory-machine"></i></div>
                                <h3><a href="blog-single">Production Line</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- service-section end -->


    
    

   
    
    @endsection