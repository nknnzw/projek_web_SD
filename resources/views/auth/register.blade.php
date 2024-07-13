@extends('auth.layout')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card mb-3" style="width: 100%;"> <!-- Adjust width as needed -->

    <div class="card-body">

      <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Halo Admin!</h5>
        <p class="text-center small">Buat Akun Anda</p>
      </div>

      <form action="{{ route('auth.store') }}" method="POST">
        @csrf
        <div class="row g-3 needs-validation" novalidate>
          <div class="col-12 mb-3">
            <label for="yourName" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="yourName" required>
            <div class="invalid-feedback">Masukkan Nama Anda!</div>
          </div>

          <div class="col-12 mb-3">
            <label for="yourEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="yourEmail" required>
            <div class="invalid-feedback">Masukkan Alamat Email Anda!</div>
          </div>

          <div class="col-12 mb-3">
            <label for="yourPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="yourPassword" required>
            <div class="invalid-feedback">Buat Password!</div>
          </div>

          <div class="col-12 mb-3">
            <label for="yourCPassword" class="form-label">Konfirmasi Password</label>
            <input type="password" name="confirm-password" class="form-control" id="yourCPassword" required>
            <div class="invalid-feedback">Masukkan Password!</div>
          </div>

          <div class="col-12 mb-2">
            <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
          </div>
          <div class="col-12">
            <p class="small mb-0">Sudah Punya Akun? <a href="{{ route('auth.authenticate') }}">Log in</a></p>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
