@extends('Frontend.Layout.main_layout')
@section('main_container')

  <!-- banner-section start  -->
  <section class="banner-section banner-section--style2 bg_img" data-background="{{url('Frontend/assets/images/banner.jpg')}}">
    <div class="banner-el-img"><img src="{{url('Frontend/assets/images/elements/banner-man.png')}}" alt="image"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="car-search-area mt-0">
            <h3 class="title">Search for Your Car</h3>
            <form class="car-search-form">
              <div class="row">
                <div class="col-xl-12 form-group">
                  <select>
                    <option value="1" selected>Choose Your Car Type</option>
                    <option value="2">Car type one</option>
                    <option value="3">Car type Two</option>
                    <option value="4">Car type Three</option>
                    <option value="5">Car type Four</option>
                    <option value="6">Car type Five</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-6">
                  <i class="fa fa-map-marker"></i>
                  <input class="form-control has-icon" type="text" placeholder="Pickup Location">
                </div>
                <div class="form-group col-xl-6">
                  <i class="fa fa-map-marker"></i>
                  <input class="form-control has-icon" type="text" placeholder="Drop Off Location">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-6">
                  <i class="fa fa-calendar"></i>
                  <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">
                </div>
                <div class="form-group col-xl-6">
                  <i class="fa fa-clock-o"></i>
                  <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-6">
                  <i class="fa fa-calendar"></i>
                  <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date">
                </div>
                <div class="form-group col-xl-6">
                  <i class="fa fa-clock-o"></i>
                  <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time">
                </div>
              </div>
              <button type="submit" class="cmn-btn btn-radius">Reservation</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-content">
            <h1 class="title">find your own car</h1>
            <p>Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla. Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla.</p>
            <a href="#0" class="cmn-btn">see all vehicles</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-section end  -->

  <!-- about-section start -->
  <section class="about-section pt-120 pb-120">
    <div class="element text-center"><img src="{{url('Frontend/assets/images/elements/car2.png')}}" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="block-area">
            <div class="block-header">
              <h2 class="title">We are Best Car Rental Company to Find Car</h2>
              <p>Lorem ipsum dolor sit amet, sit lectus risus dis aptent, vitae odio nec. Justo volutpat rutrum purus, augue cursus, turpis felis nonummy nisl. Vel justrus sed volutpat, tristique tempor scelerisque dictum dui donec urna, consequat scelerisque eu ut, ornare ut. Rutrum eget</p>
            </div>
            <div class="block-body">
              <ul class="cmn-list">
                <li>Dolorum dictum blandit</li>
                <li>Scel erisque eiusmod</li>
                <li>Accumsan suspendisse</li>
                <li>Accumsan suspendisse</li>
                <li>Massa nontellus incididunt</li>
                <li>Perspiciatis sollicitudin enim </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-section end -->

  <!-- counter-section start -->
  <div class="counter-section bg_img overlay-main" data-background="{{url('Frontend/assets/images/bg1.jpg')}}">
    <div class="container">
      <div class="row mb-none-30">
        <div class="col-lg-3 col-sm-6">
          <div class="counter-item counter-item--style2">
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <div class="content">
              <span class="counter">3497</span>
              <span class="title">total car</span>
            </div>
          </div>
        </div><!-- counter-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="counter-item counter-item--style2">
            <div class="icon">
              <i class="fa fa-smile-o"></i>
            </div>
            <div class="content">
              <span class="counter">4574</span>
              <span class="title">happy customer</span>
            </div>
          </div>
        </div><!-- counter-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="counter-item counter-item--style2">
            <div class="icon">
              <i class="fa fa-truck"></i>
            </div>
            <div class="content">
              <span class="counter">1454M</span>
              <span class="title">travel time</span>
            </div>
          </div>
        </div><!-- counter-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="counter-item counter-item--style2">
            <div class="icon">
              <i class="fa fa-puzzle-piece"></i>
            </div>
            <div class="content">
              <span class="counter">9443</span>
              <span class="title">solution</span>
            </div>
          </div>
        </div><!-- counter-item end -->
      </div>
    </div>
  </div>
  <!-- counter-section end -->

  <!-- choose-car-section start -->
  <section class="choose-car-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">our awsome car in here</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-6">
          <div class="car-item car-item--style2">
            <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/cars/8.jpg')}}"></div>
            <div class="car-item-body">
              <div class="content">
                <h4 class="title">forester subar</h4>
                <span class="price">start form $20 per day</span>
                <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                <a href="#0" class="cmn-btn">rent car</a>
              </div>
              <div class="car-item-meta">
                <ul class="details-list">
                  <li><i class="fa fa-car"></i>model 2014ib</li>
                  <li><i class="fa fa-tachometer"></i>32000 KM</li>
                </ul>
              </div>
            </div>
          </div><!-- car-item end -->
        </div><!-- car-item end -->
        <div class="col-lg-6">
          <div class="car-item car-item--style2">
            <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/cars/v2.jpg')}}"></div>
            <div class="car-item-body">
              <div class="content">
                <h4 class="title">mistubisshi</h4>
                <span class="price">start form $20 per day</span>
                <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                <a href="#0" class="cmn-btn">rent car</a>
              </div>
              <div class="car-item-meta">
                <ul class="details-list">
                  <li><i class="fa fa-car"></i>model 2014ib</li>
                  <li><i class="fa fa-tachometer"></i>32000 KM</li>
                </ul>
              </div>
            </div>
          </div><!-- car-item end -->
        </div><!-- car-item end -->
        <div class="col-lg-6">
          <div class="car-item car-item--style2">
            <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/cars/v3.jpg')}}"></div>
            <div class="car-item-body">
              <div class="content">
                <h4 class="title">mirage range</h4>
                <span class="price">start form $20 per day</span>
                <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                <a href="#0" class="cmn-btn">rent car</a>
              </div>
              <div class="car-item-meta">
                <ul class="details-list">
                  <li><i class="fa fa-car"></i>model 2014ib</li>
                  <li><i class="fa fa-tachometer"></i>32000 KM</li>
                </ul>
              </div>
            </div>
          </div><!-- car-item end -->
        </div><!-- car-item end -->
        <div class="col-lg-6">
          <div class="car-item car-item--style2">
            <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/cars/v4.jpg')}}"></div>
            <div class="car-item-body">
              <div class="content">
                <h4 class="title">pajero range</h4>
                <span class="price">start form $20 per day</span>
                <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                <a href="#0" class="cmn-btn">rent car</a>
              </div>
              <div class="car-item-meta">
                <ul class="details-list">
                  <li><i class="fa fa-car"></i>model 2014ib</li>
                  <li><i class="fa fa-tachometer"></i>32000 KM</li>
                </ul>
              </div>
            </div>
          </div><!-- car-item end -->
        </div><!-- car-item end -->
      </div>
    </div>
  </section>
  <!-- choose-car-section end -->

  <!-- combine-section start -->
  <section class="combine-section section-bg">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 bg_img overlay-3 history-area" data-background="{{url('Frontend/assets/images/bg2.jpg')}}">
          <div class="history-wrapper">
            <h2 class="title">renten great <span>history</span></h2>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <div class="history-item">
                  <span class="year">1952 - 1955</span>
                  <h4 class="title">start our journey</h4>
                  <p>Pellentesque bibendum. Vebfelis cubilia orci. Congue faub feugiat </p>
                </div>
              </div><!-- history-item end -->
              <div class="col-lg-6 col-sm-6">
                <div class="history-item">
                  <span class="year">1952 - 1955</span>
                  <h4 class="title">start our journey</h4>
                  <p>Pellentesque bibendum. Vebfelis cubilia orci. Congue faub feugiat </p>
                </div>
              </div><!-- history-item end -->
              <div class="col-lg-6 col-sm-6">
                <div class="history-item">
                  <span class="year">1952 - 1955</span>
                  <h4 class="title">start our journey</h4>
                  <p>Pellentesque bibendum. Vebfelis cubilia orci. Congue faub feugiat </p>
                </div>
              </div><!-- history-item end -->
              <div class="col-lg-6 col-sm-6">
                <div class="history-item">
                  <span class="year">1952 - 1955</span>
                  <h4 class="title">start our journey</h4>
                  <p>Pellentesque bibendum. Vebfelis cubilia orci. Congue faub feugiat </p>
                </div>
              </div><!-- history-item end -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-slider owl-carousel">
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="{{url('Frontend/assets/images/testimonial/1.jpg')}}" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
            </div><!-- testimonial-item end -->
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="{{url('Frontend/assets/images/testimonial/1.jpg')}}" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
            </div><!-- testimonial-item end -->
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="{{url('Frontend/assets/images/testimonial/1.jpg')}}" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
            </div><!-- testimonial-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- combine-section end -->

  <!-- choose-us-section start -->
  <section class="choose-us-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="choose-us-content">
            <h2 class="title title--border text-capitalize">Why choose our company</h2>
            <div class="choose-us-area">
              <div class="choose-us-item">
                <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/choose-us/1.jpg')}}"></div>
                <div class="content">
                  <h4 class="title">expert drivers</h4>
                  <p>Lorem ipsum dolor sit amet, at sed tuinucisdtpis a fermentum  quisque sem at luctus vel in. Vesed enim mollis ligula, mollis augue.</p>
                </div>
              </div><!-- choose-us-item end -->
              <div class="choose-us-item">
                <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/cars/7.jpg')}}"></div>
                <div class="content">
                  <h4 class="title">fast services</h4>
                  <p>Lorem ipsum dolor sit amet, at sed tuinucisdtpis a fermentum  quisque sem at luctus vel in. Vesed enim mollis ligula, mollis augue.</p>
                </div>
              </div><!-- choose-us-item end -->
              <div class="choose-us-item">
                <div class="thumb bg_img" data-background="{{url('Frontend/assets/images/choose-us/3.jpg')}}"></div>
                <div class="content">
                  <h4 class="title">customer support</h4>
                  <p>Lorem ipsum dolor sit amet, at sed tuinucisdtpis a fermentum  quisque sem at luctus vel in. Vesed enim mollis ligula, mollis augue.</p>
                </div>
              </div><!-- choose-us-item end -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="request-quote-area">
            <div class="request-quote-header">
              <h3 class="title">request for quote</h3>
            </div>
            <div class="request-quote-body">
              <form class="request-quote-form">
                <div class="form-group">
                  <input type="text" name="rq_name" id="rq_name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="email" name="rq_email" id="rq_email" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="text" name="rq_email_title" id="rq_email_title" placeholder="Email Title">
                </div>
                <div class="form-group">
                  <textarea placeholder="Write Message"></textarea>
                </div>
                <button type="submit" class="cmn-btn">send request</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose-us-section end -->

  <!-- subscribe-section start -->
  <section class="subscribe-section overlay-main bg_img pt-120 pb-120" data-background="{{url('Frontend/assets/images/bg1.jpg')}}">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="subscribe-content-area text-center">
            <h2 class="title text-white">Subscribe Our News Latters for Get Update </h2>
            <form class="subscribe-form">
              <input type="email" name="subs_email" id="subs_email" placeholder="Enter your email address">
              <button type="submit" class="form-icon"><i class="fa fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subscribe-section end -->

  <!-- team-section start -->
  <section class="team-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">expert support team</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/team/4.jpg')}}" alt="image">
            </div>
            <div class="content">
              <h5 class="name">martin hook</h5>
              <span class="designation">support manager</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/martin.com">www.support/martin.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/team/5.jpg')}}" alt="image">
            </div>
            <div class="content">
              <h5 class="name">luthar king</h5>
              <span class="designation">luthar king</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/luthar.com">www.support/luthar.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/team/6.jpg')}}" alt="image">
            </div>
            <div class="content">
              <h5 class="name">harbrt tony</h5>
              <span class="designation">support manager</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/harbrt.com">www.support/harbrt.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/team/7.jpg')}}" alt="image">
            </div>
            <div class="content">
              <h5 class="name">tom jekson</h5>
              <span class="designation">support manager</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/jekson.com">www.support/jekson.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
      </div>
    </div>
  </section>
  <!-- team-section end -->

  <!-- download-apps-section start -->
  <section class="download-apps-section pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="apps-content">
            <h2 class="title title--border">Download Mobile Apps for Rental Car</h2>
            <p>Turpis posuere lectus maecenas fusce eget velit. Nibh donec habitaprsent in ut at phasellus dui, tempus lorem, tellus purus justo. Spendisse sr integer aeneanmnas pharetra aliquam sed rutrum nec. Erat sollicitudin at vel ading mi,dolor viverra babd ugshs king lipa nipa. over the head and thinking  to multikon themplate .</p>
            <div class="row">
              <div class="col-lg-6">
                <p>Lorem ipsum dolor sit ametamet justo proin libero ultricipendisse eget vel, vel vulputate ut varius quam cras.</p>
              </div>
              <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet,mesto proin libero ultriciequam spendisse eget vel vel vulputate ut variuquam cras. viver estas Prarcu.</p>
              </div>
            </div>
            <div class="btn-area">
              <a href="#0"><img src="{{url('Frontend/assets/images/elements/google-btn.png')}}" alt="image"></a>
              <a href="#0"><img src="{{url('Frontend/assets/images/elements/apple-btn.png')}}" alt="image"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="apps-thumb text-center">
            <img src="{{url('Frontend/assets/images/elements/apps-img.png')}}" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- download-apps-section end -->

  <!-- blog-section start -->
  <section class="blog-section pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">latest news &amp; tips</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/blog/5.jpg')}}" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <h3 class="post-title"><a href="#0">Pellentesque turpis  nonum</a></h3>
              <p>Lorem ipsum dolor sit amet, phasellus ut curatur vestibulum sit vitae aenean, morbi quam blandit ad. Quis ac, eu enim pulvinar ante nam sepurus ut metus ligula imperdiet orci nibh.</p>
              <a href="#0" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/blog/6.jpg')}}" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <h3 class="post-title"><a href="#0">Quis gravida ultrices nam</a></h3>
              <p>Lorem ipsum dolor sit amet, phasellus ut curatur vestibulum sit vitae aenean, morbi quam blandit ad. Quis ac, eu enim pulvinar ante nam sepurus ut metus ligula imperdiet orci nibh.</p>
              <a href="#0" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/blog/6.jpg')}}" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <h3 class="post-title"><a href="#0">Eleifend ligula velit quisque.</a></h3>
              <p>Lorem ipsum dolor sit amet, phasellus ut curatur vestibulum sit vitae aenean, morbi quam blandit ad. Quis ac, eu enim pulvinar ante nam sepurus ut metus ligula imperdiet orci nibh.</p>
              <a href="#0" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
      </div>
    </div>
  </section>
  <!-- blog-section end -->

  <!-- brand-section start -->
  <div class="brand-section pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="brand-slider owl-carousel">
            <div class="brand-item">
              <div class="brand-item--inner">
                <img src="{{url('Frontend/assets/images/brand-logo/5.png')}}" alt="image">
              </div>
            </div><!-- brand-item end -->
            <div class="brand-item">
              <div class="brand-item--inner">
                <img src="{{url('Frontend/assets/images/brand-logo/6.png')}}" alt="image">
              </div>
            </div><!-- brand-item end -->
            <div class="brand-item">
              <div class="brand-item--inner">
                <img src="{{url('Frontend/assets/images/brand-logo/7.png')}}" alt="image">
              </div>
            </div><!-- brand-item end -->
            <div class="brand-item">
              <div class="brand-item--inner">
                <img src="{{url('Frontend/assets/images/brand-logo/5.png')}}" alt="image">
              </div>
            </div><!-- brand-item end -->
            <div class="brand-item">
              <div class="brand-item--inner">
                <img src="{{url('Frontend/assets/images/brand-logo/6.png')}}" alt="image">
              </div>
            </div><!-- brand-item end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- brand-section end -->

 @endsection