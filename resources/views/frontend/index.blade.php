<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BLUE BUS - HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/google-maps-bus-icon-8.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">BLUE BUS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.php" class="logo"><img src="frontend/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#hero"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#galeri">Galery</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/login">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Blue Bus</span></h2>
          <p class="animate__animated animate__fadeInUp">
            Blue Bus Pilihan Terbaik Pesan Tiket Bus Secara Online</p>
          <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"></h2>
          <p class="animate__animated animate__fadeInUp">
            Blue Bus adalah online travel agent terbesar dan terpercaya di Indonesia yang menyediakan layanan pencarian dan pemesanan tiket bus secara lengkap. 
          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Dapatkan promo dan cashback!!</h2>
          <p class="animate__animated animate__fadeInUp">
            dapatkan promo dan cashback hinggan 50% hanya di Blue
          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="#!">Pilih rincian perjalanan</a></h4>
              <p class="description">Pilih rincian perjalanan
Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="#!">Pilih bis dan tempat duduk anda</a></h4>
              <p class="description">Pilih bis, tempat duduk, tempat keberangkatan, tujuan, isi rincian penumpang dan klik 'Pembayaran'</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="#!">Cara pembayaran yang mudah</a></h4>
              <p class="description">Pembayaran dapat dilakukan melalui transfer ATM, Internet banking, Alfamart, kartu Kredit/Debit, Mandiri Clickpay, Bca Clickpay dll</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="#!">Reservasi Tiket</a></h4>
              <p class="description">Apa itu reservasi tiket atau Booking tiket? Reservasi adalah proses pemesanan tiket yang dilakukan calon penumpang untuk melakukan penerbangan .</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Aplikasi pemesanan tiket bus online no.1 di Indonesia, Blue Bus adalah mitra resmi untuk pemesanan tiket bus dengan APSRTC, GSRTC, TSRTC, MSRTC, KSRTC (KeralaSRTC), UPSRTC, RSRTC serta operator & layanan bus populer seperti Zingbus, Orange Travels, SRS Travels, VRL Travels, Sutra Seva, Chalo Bus, Go Tour, National Travels, Intercity Chartered Bus dll. dengan harga murah.</p>
          <a href="#hero" class="btn-learn-more">Learn More</a>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Portfoio Section ======= -->
    <section id="galeri" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Kumpulan beberapa potret produk Blue Bus</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Bus</li>
              <li data-filter=".filter-card">Microbus</li>
              <li data-filter=".filter-web">Bus Double Decker</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img1/7.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="assets/img1/7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="HONDA CBR600R"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img1/3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="frontend/img/kawasaki.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="KAWASAKI NINJA H2R"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img1/5.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p><p>
              <a href="assets/img1/multistrada.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="DUCATI MULTISTRADA V4"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img1/download (3).jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="assets/img1/download (3).jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="YAMAHA R6"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img1/6.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="assets/img1/6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="DUCATI PANIGALE S1200"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img1/4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p><p>
              <a href="assets/img1/4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="BMW S1300"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="frontend/img/8.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="frontend/img/ducatiS.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="DUCATI"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="frontend/img/4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="frontend/img/7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="APRILIA"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/7.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p></p>
              <a href="frontend/img/duc.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="DUCATI"><i class="bx bx-plus"></i></a>
              <a href="frontend/produk.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfoio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Dibalik suksesnya Blue Bus ada orang-orang yang bekerja keras begadang setiap malam</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img1/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fahmi Muhammad Alhafizh</h4>
                <span>Sistem Informasi 2022</span>
                <p>Tidak ada kesuksesan yang instan, even mie instan harus dimasak dulu</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img1/team/qia.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Iqlima Fasha Rizqia</h4>
                <span>Sistem Informasi 2022</span>
                <p>Yuu brik may hat brik may haf</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
    </section><!-- End Team Section -->
  </main><!-- End #main -->

        <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
         <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img1/team/alsya.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Alsya Majandra</h4>
                <span>Sistem Informasi 2022</span>
                <p>No pork, No lard, klo No WA kamu mana?</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
      
        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img1/team/janet.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Janet Berliana</h4>
                <span>Sistem Informasi 2022</span>
                <p>Lo punya duit, Lo punya kuasa</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section><!-- End Team Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; 
        <script>
          document.write(new Date().getFullYear());
        </script>
        <strong><span>BLUE BUS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        made with ❤️ by
      <a href="https://nurulfikri.ac.id/" target="_blank" class="footer-link fw-bolder">Student of Nurul Fikri College of Integrated Technology</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>