<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$data->logo_text}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <link href="{{$data->logo_img}}" rel="icon">
  <link href="{{$data->logo_img}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.3.0
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{$data->email}}">{{$data->email}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span> <a href="tel:{{$data->phone}}"> {{$data->phone}}</a> </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{$data->twitter}}"  target="_blank" class="twitter" ><i class="bi bi-twitter"></i></a>
        <a href="{{$data->facebook}}"  target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$data->instagram}}"  target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$data->linkedin}}"  target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  
  <!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        {{-- <h1><a href="/"><span>{{$data->logo_text}}</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="/"><img style="height: 8vh" src="{{url($data->logo_img)}}" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto " href="#testimonials">Testimonial</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="about">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>{{$main->one}} <span>{{$main->two}}</span><br>{{$main->three}}</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(<?php echo $main->img1?>);"></div>
          <div class="swiper-slide" style="background-image: url(<?php echo $main->img2?>);"></div>
          <div class="swiper-slide" style="background-image: url(<?php echo $main->img3?>);"></div>
          <div class="swiper-slide" style="background-image: url(<?php echo $main->img4?>);"></div>
          <div class="swiper-slide" style="background-image: url(<?php echo $main->img5?>);"></div>
        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    {{-- <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p> {{$description->service_description}} </p>
        </div>
        <div class="row gy-4">
                  @if (count($services)>0)
                  @foreach ($services as $service)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                      <div class="box">
                        <div class="icon"><i class="<?php echo $service->icon?>"></i></div>
                        <h4 class="title" > <a href="{{route('service', $service->id)}}">{{$service->title}} </a></h4>
                        <p class="description">{{Str::limit(strip_tags($service->description), 40)}}</p>
                      </div>
                    </div>    
                  @endforeach 
                  @endif
        </div>
      </div>
    </section><!-- End Services Section -->
{{-- 
    <!-- ======= Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Clients</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Image Gallery</h2>
          <p>{{$description->img_description}} </p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($categories as $category)
              <li data-filter=".filter<?php echo $category->category?>">{{$category->category}}</li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($portfolios as $portfolio)
          <div class="col-lg-4 col-md-6 portfolio-item filter<?php echo $portfolio->category?>">
            <img style="width: 100%" src="{{url($portfolio->small_img)}}">
            <div class="portfolio-info">
              <h4>{{$portfolio->title}}</h4>
              <a href="{{url($portfolio->big_img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $portfolio->sub_title?> "><i class="bx bx-plus"></i>Zoom</a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>
          @endforeach  
        </div>
      </div>
    </section><!-- End Portfolio Section -->
    
    <!-- ======= Testimonials Section ======= -->
  <section id="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Testimonials</h2>
              <p>{{$description->testimonial_description}}</p>
            </div>
                  <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                              @foreach ($testimonials as $testimonial)
                              <div class="swiper-slide">
                                <div class="testimonial-item">
                                  <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                  {{$testimonial->quote}}
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                  </p>
                                  <img src="{{url($testimonial->img)}}" class="testimonial-img" alt="">
                                  <h3>{{$testimonial->name}}</h3>
                                  <h4>{{$testimonial->designation}}</h4>
                                  <h5>&nbsp</h5>
                                </div>
                              </div>
                              @endforeach 
                        </div>
                            <div class="swiper-pagination"></div>
                  </div>
        </div>
  </section><!-- End Testimonials Section -->



    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text">{{$description->call_description}} </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="tel:{{$data->phone}}">Call To Action</a>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Team</h2>
          <p class="cta-text">{{$description->team_description}} </p>
        </div>
        <div class="row">
          @foreach ($teams as $team)
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{url($team->img)}}" alt=""></div>
              <div class="details">
                <h4>{{$team->name}}</h4>
                <span>{{$team->designation}}</span>
                <div class="social">
                  <a href="{{$team->twitter}}" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="{{$team->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="{{$team->instagram}}" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="{{$team->linkedin}}" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>{{$description->contact_description}} </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>{{$data->address}}</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:{{$data->phone}}">{{$data->phone}}</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:{{$data->email}}">{{$data->email}}</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        {!! $description->map !!}
        {{-- <iframe src="https://maps.google.com/maps?q=uttara%20sector%2011,%20road%208&t=&z=19&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
      </div>

      {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uttara%20sector%2011,%20road%208&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> --}}


      {{-- <!-- Message Section -->

      <div class="container">
        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section --> --}}

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>{{$data->logo_text}}</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>