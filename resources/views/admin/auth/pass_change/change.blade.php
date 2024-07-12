@extends('layouts.admin')
@section('admin-content')
{{-- login  --}}
<div class="container">
    <div class="row">
        <div class="login-box-wrapper d-flex align-items-center justify-content-center mt-5 pt-5" style="width: 100%">
            <div class="login-box" style="margin-bottom: 7rem; ">
                <!-- /.login-logo -->
                <div class="card card-outline card-primary">
                  
                  <div class="card-body">
              
                    <form action="{{ route('password.update') }}" method="post">
                        @csrf
                      <div class="input-group mb-3">
                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Current Password">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                        </div>
                      </div>
                      @error('P')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                      <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                        </div>
                      </div>
                      @error('password')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                      <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                        </div>
                      </div> 
                      @error('password_confirmation')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                      @if(session()->has('error'))
                        <div class="text-danger">{{ session()->get('error')  }}</div>
                      @endif
                      <div class="row">
                        <div class="col-8">
                          
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                          <button type="submit" class="btn btn-primary btn-block">Change</button>
                        </div>
                        <!-- /.col -->
                      </div>
                      @if(session()->has('error'))
                        <div class="text-danger">{{ session()->get('error') }}</div>
                      @endif
                    </form>
              
                    {{-- <div class="social-auth-links text-center mt-2 mb-3">
                      <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                      </a>
                      <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                      </a>
                    </div>
                    <!-- /.social-auth-links --> --}}
              
                    {{-- <p class="mb-1">
                      <a href="forgot-password.html">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                      <a href="register.html" class="text-center">Register a new membership</a>
                    </p> --}}
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.login-box -->
        </div>
    </div>
</div>
@endsection