@extends('Frontend.Layout.main_layout')
@section('main_container')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="{{url('Frontend/assets/images/inner-page-bg.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">page not found</h2>
          <ol class="page-list">
            <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
            <li>404</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- error-section start -->
  <section class="error-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="error-content text-center">
            <img src="{{url('Frontend/assets/images/elements/404.png')}}" alt="image">
            <h2 class="title">Oops! sorry page not found </h2>
            <p>Quisque cras molestie dictum, aliquam litora. Tempus amet pellentesque vitae ante, consectequat sed vestibulum fringilla dictum, enim a taciti et orci fusce, non suspendisse, nunc at rutrumPellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam vehicula adipiscing quam.</p>
            <a href="index" class="cmn-btn">got to home</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- error-section end -->

  @endsection