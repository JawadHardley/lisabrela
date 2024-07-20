@extends('layouts.layout')
@section('content')

<script src="./dist/js/demo-theme.min.js?1674944402"></script>
<div class="page page-center">
    <div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    
    <form method="POST" action="{{ route('register') }}" class="card" >
      @csrf
        <div class="card-body">
            <p class="display-3 text-center">
              <i class="fa fa-cubes"></i>
            </p>
          <h2 class="card-title text-center">Register Account <p class="small">(Tax C. Officer)</p></h2>
          <hr>
          <div class="row row-cards">
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Phonenumber</label>
                <input type="text" class="form-control" name="phone" placeholder="06XXXXXX" required>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-sm-6 col-md-6"">
              <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-control form-select" name="gender" required>
                  <option selected>-- select gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" placeholder="1998" required>
                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Region</label>
                <select class="form-control form-select" name="region" id="region">
                  <option disabled selected value=""> -- select an option -- </option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">District</label>
                <select class="form-control form-select" name="district" id="district">
                  <option disabled selected value=""> -- select an option -- </option>
                </select>
                <select id="districtSel" class="form-control d-none form-select" required>
                  <option disabled selected value="0"> -- select an option -- </option>
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
              </div>
            </div>
          </div>
        </div>

        {{-- here is for hidden iunputs --}}
        <input type="hidden" class="form-control" name="role" value="tax">
        <input type="hidden" class="form-control" name="verified" value=0>

        <div class="card-footer">
          <button type="submit" class="btn btn-success w-100">Register</button>
        </div>
      </form>

    <div class="text-center text-muted mt-3">
        Already have account? <a href="/tax/login" tabindex="-1">Login</a>
    </div>
    <div class="text-center mt-3">
        <a href="/" class="btb btn-danger w-100">Go back</a>
    </div>
    </div>
</div>
    <!-- Libs JS -->
    <!-- Tabler Core -->

@endsection