@extends('auth.layout')

@section('title', 'Login')

@section('content')
<div class="card mb-3">
  <div class="card-body">
    <div class="pt-4 pb-2">
      <h5 class="card-title text-center pb-0 fs-4">Login Akun</h5>
      <p class="text-center small">Masukkan username & password untuk login</p>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('auth.authenticate') }}" method="POST" class="row g-3 needs-validation" novalidate>
      @csrf

      <div class="col-12 mb-3">
        <label for="yourEmail" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="yourEmail" value="{{ old('email') }}" required>
        <div class="invalid-feedback">Masukkan Email!</div>
      </div>

      <div class="col-12 mb-4">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Masukkan Password!</div>
      </div>

      <div class="col-12 mb-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
      </div>

      <div class="col-12 mb-2">
        <button class="btn btn-primary w-100" type="submit">Login</button>
      </div>
    </form>

  </div>
</div>
@endsection
