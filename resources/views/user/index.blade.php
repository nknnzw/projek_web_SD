<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Guru - SD Negeri Rau</title>
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
    .table-container {
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
  @include("sidebar")
  <!-- Content -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Data Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container mt-5 table-container">
      <h2 class="mt-5">Data Admin</h2>

      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <div class="table-responsive">
        <table class="table table-bordered ">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
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