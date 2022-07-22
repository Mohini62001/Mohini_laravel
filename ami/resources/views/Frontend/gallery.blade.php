@extends('Frontend.Layout.mainlayout')
@section('remaining_content')
@push('title')
   <title>Gallery</title>
@endpush

    <!-- gallery-banner -->
    <section class="gallery-banner centred">
        <div class="container">
            <div class="content-box">
                <h1>Manufacturing</h1>
            </div>
        </div>
    </section>
    <!-- gallery-banner end -->


    <!-- image-gallery -->
    <section class="image-gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-1.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-2.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-3.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-4.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-4.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-5.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-5.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-6.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-6.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-7.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-7.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-8.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-8.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-9.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-9.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- image-gallery end -->


    @endsection