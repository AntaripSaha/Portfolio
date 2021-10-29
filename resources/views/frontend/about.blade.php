<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$data->logo_text}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  {{-- <link href="{{$data->logo_img}}" rel="icon">
  <link href="{{$data->logo_img}}" rel="apple-touch-icon"> --}}

  <link href="{{$data->logo_img}}">
  <link href="{{$data->logo_img}}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:{{$data->phone}}"> {{$data->phone}}</a></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{$data->twitter}}"  target="_blank" class="twitter" ><i class="bi bi-twitter"></i></a>
        <a href="{{$data->facebook}}"  target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$data->instagram}}"  target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$data->linkedin}}"  target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        {{-- <h1><a href="/">Source<span>Tex</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="/"><img style="height: 8vh" src="{{url($data->logo_img)}}" alt=""></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/#services">Services</a></li>
          <li><a class="nav-link scrollto" href="/#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto " href="/#testimonials">Testimonial</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <li><a class="nav-link scrollto active" href="about">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>What We Are</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->
    <section class="inner-page pt-4">
      <div class="container">

                          <!-- ======= Portfolio Details Section ======= -->
                <section id="portfolio-details" class="portfolio-details">
                  <div class="container">
                      <div class="rounded mx-auto d-block">
                            <div class="rounded mx-auto d-block">
                              <div class="rounded mx-auto d-block">
                                <div class="rounded mx-auto d-block">
                                  <div>
                                    <img src="{{url($about->img)}}" alt="" class="rounded mx-auto d-block img-fluid">
                                    <div class="portfolio-description">
                                      <h2 class="text-center ">Things You Need To Know </h2>
                                      <p class="font-monospace">
                                        {{$about->description}}
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </section><!-- End Portfolio Details Section -->
      </div>
    </section>
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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>





