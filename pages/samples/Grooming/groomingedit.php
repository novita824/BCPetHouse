<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BC Pet House</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="user.html">BC PET HOUSE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="user.html">Home</a></li>
          <li><a class="nav-link scrollto" href="user.html">Profile</a></li>
          <li><a class="nav-link scrollto" href="user.html">Service</a></li>
          <li><a class="nav-link   scrollto" href="user.html">Product</a></li>
          <li><a class="nav-link scrollto" href="user.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SELAMAT DATANG DI BC PET HOUSE</h1>
          <h2>We Love We Care</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#signin" class="btn-get-started scrollto">Sign In</a>
            <a href="register.html" class="btn-get-started scrollto">Register</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/Ilustrasi.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        
        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/logo bc.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Grooming</h2>
          <p>Disini menyediakan berbagai macam tipe grooming</p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info"></br>
              <h4>Tipe Grooming</h4></br></br>
                <h4>* Regular :</h4>
                <p>Rp 40.000,00</p>
                <h4>* Kutu/Jamur :</h4>
                <p>Rp 50.000,00</p>
                <h4>* Lengkap :</h4>
                <p>Rp 55.000,00</p>
                <h4>* Sebazol :</h4>
                <p>Rp 70.000,00</p>
                <h4>* Kering :</h4>
                <p>Rp 20.000,00</p>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <h2>Edit Data Grooming Services  <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul> 
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong>There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="x_content">
                            <br>
                            <form class="form-horizontal form-label-left input_mask" method="POST"
                                enctype="multipart/form-data" action="{{route('groomingupdate',$grooming->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">Nama :</label>
                                    <input type="text" class="form-control has-feedback-left" placeholder="Nama" name="nama" required value="{{$grooming->nama}}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">Jenis Hewan :</label>
                                    <input type="text" class="form-control has-feedback-right" placeholder="Jenis Hewan" name="jenishewan" required value="{{$grooming->jenishewan}}">
                                    <span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">Umur :</label>
                                    <input type="text" class="form-control has-feedback-left" placeholder="Umur" name="umur" required value="{{$grooming->umur}}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">Alamat :</label>
                                    <input type="text" class="form-control has-feedback-right" placeholder="Alamat" name="alamat" required value="{{$grooming->alamat}}">
                                    <span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">No.Telephone :</label>
                                    <input type="text" class="form-control has-feedback-left" placeholder="No.Telephone" name="notelp" required value="{{$grooming->notelp}}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">Tipe Grooming :</label>
                                    <input type="text" class="form-control has-feedback-right" placeholder="Tipe Grooming" name="tipegrooming" required value="{{$grooming->tipegrooming}}">
                                    <span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="fullname">Sedia Pet Cargo? (Ya/Tidak) :</label>
                                    <input type="text" class="form-control has-feedback-left" placeholder="Sedia Pet Cargo? (Ya/Tidak)" name="sediapetcargo" required value="{{$grooming->sediapetcargo}}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback-left">
                                        <br><br>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a class="btn btn-primary" href="{{ route('kategoriproduk.index') }}">Cancel</a>
                                        <a class="btn btn-danger" type="reset">Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BC PET HOUSE</h3>
            <p>
              Jl. MT. Haryono XI No.338A, Dinoyo,<br>
              Kec. Lowokwaru, Kota Malang,<br>
              Jawa Timur, Indonesia <br><br>
              <strong>No.Telp:</strong> 0857-0818-0182<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="user.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user.html">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user.html">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Service Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Penginapan Hewan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Grooming</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Ikuti akun sosial media yang kami punya</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/bcpethouse/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/bcpethouse/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BC Pet House</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>