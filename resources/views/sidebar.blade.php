<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard.index') }}" >
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
        <a href="{{ route('struktur.index') }}" >
            <i class="bi bi-circle"></i><span>Data Struktur</span>
        </a>
        </li>
        <li>
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
        <li>
        <a href="{{ route('user.index') }}" >
            <i class="bi bi-circle"></i><span>Data Admin</span>
        </a>
        </li>
        <li>
        <a href="{{ route('dashboard.edit') }}" >
            <i class="bi bi-circle"></i><span>Data Dashboard</span>
        </a>
        </li>
    </ul>
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
    <a class="nav-link collapsed" href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
    </a>
    </li>   
</ul>
</aside><!-- End Sidebar-->