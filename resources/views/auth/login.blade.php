@extends('auth.layout')

@section('title', 'Login')

@section('content')
<div class="card mb-3">

  <div class="card-body">

    <div class="pt-4 pb-2">
      <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
      <p class="text-center small">Enter your username & password to login</p>
    </div>
    <form action="{{ route('auth.authenticate') }}" method="POST">
      @csrf
      <form class="row g-3 needs-validation" novalidate>

        <div class="col-12 mb-3">
          <label for="yourEmail" class="form-label">Your Email</label>
          <input type="email" name="email" class="form-control" id="yourEmail" required>
          <div class="invalid-feedback">Please enter a valid Email adddress!</div>
        </div>

        <div class="col-12 mb-4">
          <label for="yourPassword" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="yourPassword" required>
          <div class="invalid-feedback">Please enter your password!</div>
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
        <div class="col-12">
          <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a>
          </p>
        </div>
      </form>
    </form>

  </div>
</div>
@endsection
