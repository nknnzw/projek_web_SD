
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SD N RAU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('style/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/glightbox/css/glightbox.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/swiper/swiper-bundle.min.css')}}">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{asset('style/assets/css/main.css')}}">

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Jun 27 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  .features-img-bg img {
    width: 30%;
    height: auto;
  }
  .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.member {
  background: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
  border-radius: 8px;
  overflow: hidden;
  text-align: center;
  max-width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 350px;
  width: 250px; /* Set a fixed width */
  margin: 10px; /* Add margin for spacing between cards */
}

.member:hover {
  transform: translateY(-10px);
}

.member-img {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 250px; /* Set a fixed height for consistency */
  display: flex;
  justify-content: center;
  align-items: center;
}

.member-img img {
  transition: 0.3s;
  width: auto;
  height: 100%; /* Ensure all images fit within the fixed height */
  object-fit: cover;
}

.member-info {
  padding: 10px 20px;
  flex-grow: 1; /* Ensures the info section grows to fill space */
}

.member-info h4 {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 5px;
  color: #333;
}

.member-info span {
  display: block;
  font-size: 14px;
  color: #777;
  word-wrap: break-word; /* Ensure text does not overflow */
}

  </style>
  

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{asset('style/assets/img/logosd.png')}}" alt="Deskripsi Gambar" style="margin-right: 10px;">
        <h1 class="sitename">SD Negeri Rau</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Jadwal</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Ekstrakulikuler</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Struktur</a></li>
          <li><a class="nav-link scrollto" href="#recent-posts">Guru</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset('style/assets/img/s1.jpeg')}}" alt="" data-aos="fade-in">

      <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 20px;">
              Selamat Datang di Website SD Negeri Rau
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" style="margin-top: 20px;">
              Temukan informasi terbaru tentang kegiatan sekolah dan program pendidikan kami yang inovatif. Mari bersama-sama menciptakan masa depan cerah untuk generasi penerus di SD N Rau.
            </p>
          </div>
        </div>
      </div>      
    
    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

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
            
              <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                <div class="col-lg-5 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                  <img src="{{asset('style/assets/img/guru/kepsek.jpg')}}" class="img-fluid" alt="" style="width: 50%; height: auto;">
                </div>
                <div class="col-lg-7 d-flex justify-content-center flex-column" data-aos="fade-up">
                  <h3>Selamat datang di website SD Negeri Rau</h3>
                  <p>Kami bangga menyambut Anda di website kami. Di SD Negeri Rau, kami berkomitmen untuk menyediakan lingkungan belajar yang kondusif dan inspiratif, dengan fokus pada pengembangan karakter dan prestasi akademik siswa.</p>
                  <p>Salah satu program unggulan kami adalah Ekstrakurikuler Pramuka, yang mengasah keterampilan survival, teamwork, dan tanggung jawab. Kami percaya bahwa setiap siswa memiliki potensi luar biasa yang perlu dikembangkan.</p>
                  <p>Terima kasih atas kepercayaan Anda kepada Di SD Negeri Rau. Semoga website ini bermanfaat bagi Anda.</p>
                  <h5>KASAN, S.Pd.SD</h5>
                </div>
              </div><!-- Features Item -->
              <div class="row gy-4">

                <section id="faq" class="faq section">

                  <div class="container">
            
                    <div class="row gy-4">
            
                      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                          <h3><strong>F.A.Q</strong></h3>
                          <p>
                            Temukan jawaban dari pertanyaan-pertanyaan yang sering diajukan tentang SD Negeri Rau.
                        
                        </div>
                      </div>
            
                      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            
                        <div class="faq-container">
                          <div class="faq-item">
                            <h3><span class="num">1.</span> <span>Di mana alamat SD Negeri Rau?</span></h3>
                            <div class="faq-content">
                              <p> Jln. Balai Desa Rau RT.01 RW.03 Kecamatan Kedung, Kabupaten Jepara, 59463.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                          </div><!-- End Faq item-->
            
                          <div class="faq-item">
                            <h3><span class="num">2.</span> <span>Apa akreditasi SD Negeri Rau?</span></h3>
                            <div class="faq-content">
                              <p> SD Negeri Rau mendapatkan status akreditasi A dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                          </div><!-- End Faq item-->
            
                          <div class="faq-item">
                            <h3><span class="num">3.</span> <span>Siapa nama kepala sekolah SD Negeri Rau?</span></h3>
                            <div class="faq-content">
                              <p>SD Negeri Rau dipimpin oleh kepala sekolah bernama Kasan, S.Pd.SD.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                          </div><!-- End Faq item-->
            
                          <div class="faq-item">
                            <h3><span class="num">4.</span> <span>Apa saja program unggulan di SD Negeri Rau?</span></h3>
                            <div class="faq-content">
                              <p>SD Negeri Rau memiliki beberapa program unggulan, antara lain Ekstrakurikuler Pramuka dan Ekstrakulikuler Tari. Program-program ini bertujuan untuk mengembangkan keterampilan, karakter dan pengalaman siswa.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                          </div><!-- End Faq item-->
            
                          <div class="faq-item">
                            <h3><span class="num">5.</span> <span>Bagaimana cara mendaftar di SD Negeri Rau?</span></h3>
                            <div class="faq-content">
                                <p>Untuk mendaftar di SD Negeri Rau, calon siswa dapat mengunjungi kantor sekolah untuk mengisi formulir pendaftaran. Informasi lebih lanjut mengenai persyaratan dan prosedur pendaftaran dapat ditemukan di website resmi SD Negeri Rau atau menghubungi bagian administrasi sekolah.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
            
                        </div>
            
                      </div>
            
            
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Jadwal</h2>
        <p>Jadwal Belajar Mengajar SD Negeri Rau</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-4">
    
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <img src="{{asset('style/assets/img/jadwal/1.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
              </div>
            </div>
    
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <img src="{{asset('style/assets/img/jadwal/2.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <img src="{{asset('style/assets/img/jadwal/3.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
              </div>
            </div>
    
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <img src="{{asset('style/assets/img/jadwal/4.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <img src="{{asset('style/assets/img/jadwal/5.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
              </div>
            </div>
    
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <img src="{{asset('style/assets/img/jadwal/6.png')}}" alt="Deskripsi Gambar" style="max-width: 100%; height: auto;">
              </div>
            </div>
          </div>
    
        </div>
      </div>
    
    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Ekstrakulikuler</h2>
        <p>Ekstrakulikuler SD Negeri Rau</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
    
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-pramuka">Pramuka</li>
            <li data-filter=".filter-tari">Tari</li>
          </ul><!-- End Portfolio Filters -->
    
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
    
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-pramuka">
              <img src="{{asset('style/assets/img/dokumentasi/pra1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Eskrakulikuler Pramuka</h4>
                <p></p>
                <a href="{{asset('style/assets/img/dokumentasi/pra1.jpg')}}" title="Eskrakulikuler Pramuka adalah program ekstrakurikuler yang menawarkan petualangan outdoor, keterampilan bertahan hidup, dan pembelajaran kepemimpinan melalui kegiatan berkemah, hiking, dan eksplorasi alam." data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
    
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-pramuka">
              <img src="{{asset('style/assets/img/dokumentasi/pra2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Eskrakulikuler Pramuka</h4>
                  <p></p>
                  <a href="{{asset('style/assets/img/dokumentasi/pra2.jpg')}}" title="Ekstrakulikuler Pramuka memberikan siswa kesempatan untuk mengembangkan keterampilan survival, teamwork, dan tanggung jawab melalui berbagai kegiatan seperti orienteering, memasak di alam terbuka, dan pembuatan perangkat pramuka." data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
          </div><!-- End Portfolio Item -->
          
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-pramuka">
              <img src="{{asset('style/assets/img/dokumentasi/pra3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Eskrakulikuler Pramuka</h4>
                <p></p>
                <a href="{{asset('style/assets/img/dokumentasi/pra3.jpg')}}" title="Melalui esktrakurikuler Pramuka, siswa dapat menemukan potensi diri mereka dalam lingkungan alam, belajar tentang keberagaman hayati, serta membangun karakter tangguh dan mandiri melalui eksplorasi dan pengalaman langsung di alam bebas." data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
    
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-tari">
              <img src="{{asset('style/assets/img/dokumentasi/tar1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ekstrakulikuler Tari</h4>
                <p></p>
                <a href="{{asset('style/assets/img/dokumentasi/tar1.jpg')}}" title="Eskrakulikuler tari adalah wadah bagi siswa untuk mengekspresikan kreativitas dan memperdalam pemahaman mereka tentang seni pertunjukan. Melalui latihan rutin dan pertunjukan, siswa mengembangkan keahlian teknis dan menghargai keindahan gerakan dalam berbagai jenis tari." data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
    
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-tari">
              <img src="{{asset('style/assets/img/dokumentasi/tar2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ekstrakulikuler Tari</h4>
                <p></p>
                <a href="{{asset('style/assets/img/dokumentasi/tar2.jpg')}}" title="Program esktrakurikuler tari menyediakan platform bagi siswa untuk belajar berbagai genre tari, mulai dari balet klasik hingga tarian modern. Selain itu, siswa juga memperoleh pemahaman tentang sejarah dan budaya di balik setiap gerakan dan koreografi." data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
              </div><!-- End Portfolio Item -->
    
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-tari">
              <img src="{{asset('style/assets/img/dokumentasi/tar3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ekstrakulikuler Tari</h4>
                <p></p>
                <a href="{{asset('style/assets/img/dokumentasi/tar3.jpg')}}" title="Dalam esktrakurikuler tari, siswa belajar menghargai kerja tim, disiplin, dan dedikasi yang diperlukan untuk mencapai tingkat keunggulan dalam seni tari. Melalui latihan intensif dan penampilan di depan publik, mereka membangun rasa percaya diri dan kepekaan artistik yang mendalam." data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
    
          </div><!-- End Portfolio Container -->
    
        </div>
    
      </div>
    
    </section><!-- /Portfolio Section -->
    

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Struktur</h2>
        <p>Struktur Organisasi Sekolah</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-4 d-flex justify-content-center align-items-center" style="display: flex; justify-content: center; align-items: center;">
            <div class="portfolio-img" style="display: flex; justify-content: center; align-items: center; width: 100%; text-align: center;">
              <img src="{{asset('style/assets/img/dokumentasi/struktur.png')}}" class="img-fluid" style="width: 280%; max-width: 280%; height: auto; max-height: 100vh;" alt="">
            </div>
          </div>
        </div>
      </div>
      
    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Guru</h2>
        <p>Daftar Guru SD N Rau</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          @foreach($guru as $d)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{ asset('/storage/posts/'.$d->foto) }}" class="img-fluid" alt="{{$d->nama}}">
              </div>
              <div class="member-info text-center">
                <h4>{{$d->nama}}</h4>
                <span>{{$d->jabatan}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
      
      

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Kontak & Alamat</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jln. Balai Desa Rau RT.01 RW.03</p>
                  <p>Kecamatan Kedung, Kabupaten Jepara, 59463</p>
                  
                </div>
              </div><!-- End Info Item -->
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Buka</h3>
                  <p>Senin - Jumat</p>
                  <p>07:00 - 14:00</p>
                  <p>Sabtu</p>
                  <p>07:00 - 12:00</p>
                </div>
              </div><!-- End Info Item -->

              

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>sd_negeri_rau@yahoo.co.id</p>
                  
                </div>
              </div><!-- End Info Item -->
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <a href="https://wa.me/6282133230003" target="_blank">
                    <i class="bi bi-telephone"></i>
                    <h3>Telepon</h3>
                    <p>+62 821 3323 0003</p>
                  </a>
                </div>
              </div>
              

              
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.594894680574!2d110.6651!3d-6.646446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70e03261e7f8c7%3A0x509faf4668a2fcc8!2sSDN%20Rau!5e0!3m2!1sen!2sid!4v1699637916551!5m2!1sen!2sid"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">SD Negeri Rau</span>
          </a>
          <p>Temukan informasi terbaru tentang kegiatan sekolah dan program pendidikan kami yang inovatif. Mari bersama-sama menciptakan masa depan cerah untuk generasi penerus di SD N Rau.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/SdnRau"><i class="bi bi-facebook"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Jadwal</a></li>
            <li><a href="#">Ekstrakulikuler</a></li>
            <li><a href="#">Struktur</a></li>
            <li><a href="#">Guru</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="#">Kurikulum</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Prestasi</a></li>
            <li><a href="#">Kegiatan Siswa</a></li>
            <li><a href="#">Bimbingan Konseling</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jln. Balai Desa Rau RT.01 RW.03</p>
          <p>Kecamatan Kedung, Kabupaten Jepara, 59463</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+62 821 3323 0003</span></p>
          <p><strong>Email:</strong> <span>sd_negeri_rau@yahoo.co.id</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="sitename">SD Negeri Rau</strong></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
       
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('style/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('style/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('style/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('style/assets/js/main.js')}}"></script>

</body>

</html>