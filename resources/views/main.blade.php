
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SD N RAU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('style/assets/img/favicon.jpg')}}"rel="icon">
  <link href="{{asset('style/assets/img/apple-touch-icon.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href ="{{asset('style/assets/vendor/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/aos/aos.css" rel="stylesheet')}} ">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/glightbox/css/glightbox.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/swiper/swiper-bundle.min.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 style="display: flex; align-items: center;">
          <img src="{{asset('style/assets/img/logosd.png')}}" alt="Deskripsi Gambar" style="margin-right: 10px;"> <!-- Ubah 'gambar.jpg' dengan URL atau path ke gambar yang ingin Anda tambahkan -->
          <a href="index.html" style="text-decoration: none;">SD Negeri RAU</a>
        </h1>
      </div>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Jadwal</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Ekstrakulikuler</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Struktur</a></li>
          <li><a class="nav-link scrollto" href="#team">Guru</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>SD Negeri Rau</span></h2>
          <p class="animate__animated fanimate__adeInUp">Temukan informasi terbaru tentang kegiatan sekolah dan program pendidikan kami yang inovatif. Mari bersama-sama menciptakan masa depan cerah untuk generasi penerus di SD N Rau.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>SD Negeri Rau</span></h2>
          <p class="animate__animated fanimate__adeInUp">Temukan informasi terbaru tentang kegiatan sekolah dan program pendidikan kami yang inovatif. Mari bersama-sama menciptakan masa depan cerah untuk generasi penerus di SD N Rau.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>SD Negeri Rau</span></h2>
          <p class="animate__animated fanimate__adeInUp">Temukan informasi terbaru tentang kegiatan sekolah dan program pendidikan kami yang inovatif. Mari bersama-sama menciptakan masa depan cerah untuk generasi penerus di SD N Rau.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Tentang Kami</h2>
          <p>Visi Misi & Tujuan</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-11">
            <p>
              Visi
            </p>
            <p>“Terbentuknya peserta didik yang beriman, bertaqwa, cerdas, terampil, berbudi luhur, serta berbudaya hidup bersih dan sehat”</p>
            <p>Misi</p>
            <ul>
              <li><i class="ri-check-double-line"></i> Menanamkan perilaku yang sesuai dengan Aqidah dan norma agama</li>
              <li><i class="ri-check-double-line"></i> Menanamkan perilaku, berbudi luhur dan berakhlak mulia</li>
              <li><i class="ri-check-double-line"></i> Melaksanakan proses pembelajaran yang efektif dan efisien</li>
              <li><i class="ri-check-double-line"></i> Memberikan bekal keterampilan untuk kehidupan di masa mendatang</li>
              <li><i class="ri-check-double-line"></i> Membiasakan perilaku hidup bersih pada pribadi dan lingkungan</li>
              <li><i class="ri-check-double-line"></i> Membiasakan perilaku hidup sehat untuk pribadi dan lingkungan</li>
            </ul>
            <p>Tujuan</p>
            <ul>
              <li><i class="ri-check-double-line"></i> Menjadikan siswa didik yang kreatif, inovatif, cerdas, trampil, serta tanggung jawab</li>
              <li><i class="ri-check-double-line"></i> Menjadikan siswa bertingkah laku ramah, beriman dan bertaqwa berbudi pekerti luhur berkepribadian Indonesia</li>
              <li><i class="ri-check-double-line"></i> Menjadikan siswa mampu melanjutkan pendidikan kejenjang selanjutnya</li>
            </ul>
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->

    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>ALamat Sekolah</h3>
            <p> Jln. Balai Desa Rau RT.01 RW.03 Kecamatan Kedung, Kabupaten Jepara, 59463.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Email: sd_negeri_rau@yahoo.co.id</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <section id="services" class="services">
      <div class="container">
    
        <div class="section-title" data-aos="zoom-out">
          <h2>Jadwal Pelajaran</h2>
          <p>Jadwal Belajar Mengajar Kelas 1-6</p>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <img src="{{asset('style/assets/img/jadwal/1.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <img src="{{asset('style/assets/img/jadwal/2.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <img src="{{asset('style/assets/img/jadwal/3.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <img src="{{asset('style/assets/img/jadwal/4.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <img src="{{asset('style/assets/img/jadwal/5.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <img src="{{asset('style/assets/img/jadwal/6.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Ekstrakulikuler</h2>
          <p>Dokumentasi Kegiatan Ekstrakulikuler</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">Ekstrakulikuler Pramuka</li>
          <li data-filter="*" class="filter-active">Ekstrakulikuler Tari</li>
          
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('style/assets/img/dokumentasi/pra1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ekstrakulikuler</h4>
              <p>Ekstrakulikuler Pramuka</p>
              <a href="{{asset('style/assets/img/dokumentasi/pra1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ekstrakulikuler Pramuka"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('style/assets/img/dokumentasi/pra2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ekstrakulikuler</h4>
              <p>Ekstrakulikuler Pramuka</p>
              <a href="{{asset('style/assets/img/dokumentasi/pra2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ekstrakulikuler Pramuka"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('style/assets/img/dokumentasi/pra3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ekstrakulikuler</h4>
              <p>Ekstrakulikuler Pramuka</p>
              <a href="{{asset('style/assets/img/dokumentasi/pra3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ekstrakulikuler Pramuka"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('style/assets/img/dokumentasi/tar1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ekstrakulikuler </h4>
              <p>Ekstrakulikuler Tari</p>
              <a href="{{asset('style/ assets/img/dokumentasi/tar1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ekstrakulikuler Tari"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('style/assets/img/dokumentasi/tar2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ekstrakulikuler</h4>
              <p>Ekstrakulikuler Tari</p>
              <a href="{{asset('style/assets/img/dokumentasi/tar2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ekstrakulikuler Tari"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('style/assets/img/dokumentasi/tar3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ekstrakulikuler</h4>
              <p>Ekstrakulikuler Tari</p>
              <a href="{{asset('style/assets/img/dokumentasi/tar3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ekstrakulikuler Tari"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
    
        <div class="section-title" data-aos="zoom-out">
          <h2>Struktur</h2>
          <p>Struktur Organisasi Sekolah</p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img" style="text-align: center;"> <!-- Tambahkan style untuk mengatur gambar menjadi besar dan berada di tengah -->
              <img src="{{asset('style/assets/img/dokumentasi/struktur.png')}}" class="img-fluid" style="width: 100%; max-width: 100%; height: auto; max-height: 100vh;" alt="">  <!-- Ubah kelas untuk ukuran gambar -->
            </div>
            <div class="portfolio-info">
              <h4>Struktur</h4>
              <p>Struktur Organisasi SD N Rau</p>
              <a href="{{asset('style/assets/img/dokumentasi/struktur.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Struktur Organinasi SD N Rau"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
    

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Pertanyaan yang sering ditanyakan</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Di mana alamat SD Negeri Rau? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Jln. Balai Desa Rau RT.01 RW.03 Kecamatan Kedung, Kabupaten Jepara, 59463.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apa akreditasi SD Negeri Rau? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                SD Negeri Rau mendapatkan status akreditasi A dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Siapa nama kepala sekolah SD Negeri Rau? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                SD Negeri Rau dipimpin oleh kepala sekolah bernama Kasan.
              </p>
            </div>
          </li>

         
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Guru</h2>
          <p>Daftar Guru SD N Rau</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="contact" class="contact">
      <div class="container">
    
        <div class="section-title" data-aos="zoom-out">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div>
    
        <div class="row mt-5">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi</h4>
                <p>Jln. Balai Desa Rau RT.01 RW.03 Kecamatan Kedung, Kabupaten Jepara, 59463</p>
              </div>
    
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>SD_Negeri_Rau@yahoo.co.id</p>
              </div>
    
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+62 8233230003</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-8 col-md-6" data-aos="fade-left">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.196829701592!2d110.678351!3d-6.596741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a19c587cfc1%3A0x18a1f334967c45d8!2sJln.%20Balai%20Desa%20Rau%20RT.01%20RW.03%2C%20Kecamatan%20Kedung%2C%20Kabupaten%20Jepara%2C%20Jawa%20Tengah%2C%2059463!5e0!3m2!1sen!2sid!4vYOUR_EMBED_API_KEY" frameborder="0" style="width: 100%; height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          
    
      </div>
    </section>
    
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>SD N Rau</h3>
      <p>Temukan informasi terbaru tentang kegiatan sekolah dan program pendidikan kami yang inovatif. Mari bersama-sama menciptakan masa depan cerah untuk generasi penerus di SD N Rau.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Niken Nazwa</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('style/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('style/assets/js/main.js')}} "></script>

</body>

</html>