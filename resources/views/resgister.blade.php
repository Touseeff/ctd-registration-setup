@include('backend.layout.header-script')
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="register-box">
                <div class="register-logo">
                    <img width="160px" src="{{ asset('public/assets/img/c_tech_logo.png')}}" alt="CD_logo" srcset="">
                    {{-- <a href="../../index2.html"><b>Register</b></a> --}}
                </div>

                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Sign Up</p>
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Full name"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </p>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </p>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </p>

                            <div class="input-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Retype password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-danger">
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                            </p>


                            <div class="row">
                                <div class="col-8">
                                    {{-- <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                    </label>
                                  </div> --}}
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        
                        {{-- <div class="social-auth-links text-center">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
              </a>
            </div> --}}

                        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
        </div>
        <div class="col-4"></div>
    </div>
</div>
@include('backend.layout.footer-script')
