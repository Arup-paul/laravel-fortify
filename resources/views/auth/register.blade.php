@extends('template')

@section('content')

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/register.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Register a new account</p>
              <form action="#!">
                  @csrf
                  <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>

                  <div class="form-group mb-4">
                    <label for="password_confirm" class="sr-only"> Confirm Password</label>
                    <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="***********">
                  </div>

                  <input name="register" id="register" class="btn btn-block login-btn mb-4" type="button" value="Register here">
                </form> 
                <p class="login-card-footer-text">You have  an already  account? <a href="{{}}" class="text-reset">Login here</a></p>
                 
            </div>
          </div>
        </div>
      </div>

@endsection