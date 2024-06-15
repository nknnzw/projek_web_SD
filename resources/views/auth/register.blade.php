@extends('auth.layout')

@section('title', 'Register')

@section('content')
<div class="card mb-3">

  <div class="card-body">

    <div class="pt-4 pb-2">
      <h5 class="card-title text-center pb-0 fs-4">Halo Admin!</h5>
      <p class="text-center small">Enter your personal details to create account</p>
    </div>

    <form action="{{ route('auth.store') }}" method="POST">
      @csrf
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-12 mb-3">
          <label for="yourName" class="form-label">Your Name</label>
          <input type="text" name="name" class="form-control" id="yourName" required>
          <div class="invalid-feedback">Please, enter your name!</div>
        </div>

        <div class="col-12 mb-3">
          <label for="yourEmail" class="form-label">Your Email</label>
          <input type="email" name="email" class="form-control" id="yourEmail" required>
          <div class="invalid-feedback">Please enter a valid Email adddress!</div>
        </div>

        <div class="col-12 mb-3">
          <label for="yourPassword" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="yourPassword" required>
          <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <div class="col-12 mb-3">
          <label for="yourCPassword" class="form-label">Confirm Password</label>
          <input type="password" name="confirm-password" class="form-control" id="yourCPassword" required>
          <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <div class="col-12 mb-2">
          <button class="btn btn-primary w-100" type="submit">Create Account</button>
        </div>
        <div class="col-12">
          <p class="small mb-0">Already have an account? <a href="{{ route('auth.authenticate') }}">Log in</a></p>
        </div>
      </form>
    </form>

  </div>
</div>
@endsection
