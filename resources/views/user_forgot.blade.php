@include('backend.layout.header-script')
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="login-box">
                <div class="login-logo">
                    <img width="160px" src="{{ asset('public/assets/img/c_tech_logo.png') }}" alt="CD_logo" srcset="">

                    {{-- <a href="../../index2.html"><b>Login</b></a> --}}
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">forgot</p>
                        {{-- msg --}}
                        {{-- // Blade view code  --}}
                        @if (session('status') === 'success')
                            <div id="auto-hide-alert" class="alert alert-success alert-dismissible fade show"
                                role="alert">
                                {{ session('msg') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('status') === 'danger')
                            <div id="auto-hide-alert" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ session('msg') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- msg --}}
                        <form action="{{route('forgot.match')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                            <div class="row">
                                {{-- <div class="col-6"> --}}

                                {{-- </div> --}}
                                <!-- /.col -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    <a href="{{route('login')}}" class="btn btn-dark btn-block text-white">Cancel</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        {{-- <div class="social-auth-links text-center mb-3">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
              </a>
            </div> --}}
                        <!-- /.social-auth-links -->

                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <!-- /.login-box -->
        </div>
        <div class="col-4"></div>
    </div>
</div>
@include('backend.layout.footer-script')
