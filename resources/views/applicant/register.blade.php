@extends('layouts.layout')
@section('content')

<script src="./dist/js/demo-theme.min.js?1674944402"></script>
<div class="page page-center">
    <div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    
    <form class="card">
        <div class="card-body">
            <p class="display-3 text-center">
              <i class="fa fa-cubes"></i>
            </p>
          <h2 class="card-title text-center">Register Account <p class="small">(Applicant)</p></h2>
          <hr>
          <div class="row row-cards">
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="First Name">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Phonenumber</label>
                <input type="text" class="form-control" placeholder="06XXXXXX">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="you@example.com">
              </div>
            </div>
            <div class="col-sm-6 col-md-6"">
              <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-control form-select">
                  <option selected>-- select gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" placeholder="06XXXXXX">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="password">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="confirm password">
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success w-100">Register</button>
        </div>
      </form>

    <div class="text-center text-muted mt-3">
        Already have account? <a href="/applicant/login" tabindex="-1">Login</a>
    </div>
    <div class="text-center mt-3">
        <a href="/" class="btb btn-danger w-100">Go back</a>
    </div>
    </div>
</div>
    <!-- Libs JS -->
    <!-- Tabler Core -->

@endsection