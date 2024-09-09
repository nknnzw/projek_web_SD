<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Pengguna - SD Negeri Rau</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin/assets/img/favicon.png')}} " rel="icon">
  <link href="{{asset('admin/assets/img/apple-touch-icon.png')}} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
  <style>
    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
  </style>

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
    </div>
  </header>
 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li><a href="{{ route('tabelGuru.index') }}"><i class="bi bi-circle"></i><span>Data Guru</span></a></li>
          <li><a href="{{ route('extra.index') }}"><i class="bi bi-circle"></i><span>Data Extra</span></a></li>
          <li><a href="{{ route('struktur.index') }}"><i class="bi bi-circle"></i><span>Data Struktur</span></a></li>
          <li><a href="{{ route('jadwal.index') }}"><i class="bi bi-circle"></i><span>Data Jadwal</span></a></li>
          <li><a href="{{ route('kegiatan.index') }}"><i class="bi bi-circle"></i><span>Data Kegiatan</span></a></li>
          <li><a href="{{ route('prestasi.index') }}"><i class="bi bi-circle"></i><span>Data Prestasi</span></a></li>
          <li><a href="{{ route('user.index') }}"><i class="bi bi-circle"></i><span>Data Admin</span></a></li>
        </ul>
      </li>
    </li><!-- End Tables Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('auth.register') }}">
          <i class="bi bi-person"></i>
          <span>Register</span>
      </a>
    </li>
      <li class="nav-item">
        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        <a class="nav-link collapsed" href="{{ route('auth.logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </aside>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Pengguna</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Edit Pengguna</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container mt-5 form-container">
      <h2 class="mt-5">Edit Data Pengguna</h2>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <form action="{{ route('user.update', $user->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
          </div>

          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
          </div>

          <div class="mb-3">
              <label for="password" class="form-label">Password (kosongkan jika tidak ingin mengganti password)</label>
              <input type="password" name="password" class="form-control">
          </div>

          <div class="mb-3">
              <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Perbarui</button>
      </form>
    </div>
  </main>
 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SD Negeri Rau</span></strong>
      </div>
      <div class="credits"></div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>