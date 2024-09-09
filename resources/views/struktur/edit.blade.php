<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - SD N Rau</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">SD Negeri Rau</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a href="{{ route('dashboard') }}" >
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('tabelGuru.index') }}" >
              <i class="bi bi-circle"></i><span>Data Guru</span>
            </a>
          </li>
          <li>
            <a href="{{ route('extra.index') }}" >
              <i class="bi bi-circle"></i><span>Data Extra</span>
            </a>
          </li>
          <li>
            <li>
                <li>
                    <a href="{{ route('struktur.index') }}" >
                      <i class="bi bi-circle"></i><span>Data Struktur</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('jadwal.index') }}" >
                      <i class="bi bi-circle"></i><span>Data Jadwal</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('kegiatan.index') }}" >
                      <i class="bi bi-circle"></i><span>Data Kegiatan</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('prestasi.index') }}" >
                      <i class="bi bi-circle"></i><span>Data Prestasi</span>
                    </a>
                  </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="nav-link collapsed" href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
        </a>
    </li>   

    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">
  <div class="pagetitle">
    <h1>Data Struktur</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Data Struktur</li>
        <li class="breadcrumb-item active">Edit Struktur</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
    <div class="container mt-5">
        <h1 class="mb-4">Edit Struktur</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control">
                <img src="{{ asset('images/' . $struktur->foto) }}" width="100" class="mt-3">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $struktur->nama) }}">
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $struktur->jabatan) }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</div>
</div>

</div>
</div>
</section>

</main><!-- End #main -->
    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>SD Negeri Rau</span></strong>
        </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin/assets/js/main.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>



