@include('backend.layout.header-script')
<style>
    .is-invalid {
    border-color: #dc3545; /* Red color for invalid input */
}

</style>
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
                        <p class="login-box-msg">Sign In</p>
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
                        <form action="{{ route('user.login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="input-group mb-3">
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text " >
                                        <span class="fas fa-lock  @error('password') is-invalid @enderror"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="row">
                                <div class="col-8">

                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
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

                        <p class="mb-1">
                            <a href="{{ route('forgot.create') }}">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{ route('user.create') }}" class="text-center">Register a new membership</a>
                        </p>
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
<script>
//   document.addEventListener('DOMContentLoaded', function() {
//     const emailInput = document.getElementById('email');
//     const passwordInput = document.getElementById('password');

//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email pattern

//     emailInput.addEventListener('input', function() {
//         if (emailInput.value.length === 0 || emailRegex.test(emailInput.value)) {
//             emailInput.style.borderColor = '#50C878'; // Reset border color for valid input or empty field
//         } else {
//             emailInput.style.borderColor = '#dc3545'; // Red border for invalid email
//         }
//     });

//     passwordInput.addEventListener('input', function() {
//         if (passwordInput.value.length >= 8) {
//             passwordInput.style.borderColor = '#50C878'; // Reset border color for valid input
//         } else {
//             passwordInput.style.borderColor = '#dc3545'; // Red border for invalid input
//         }
//     });
// });



document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email pattern

    // Handle email input on focus
    emailInput.addEventListener('focus', function() {
        emailInput.style.borderColor = ''; // Clear the border color on focus
    });

    // Handle email input on typing
    emailInput.addEventListener('input', function() {
        if (emailInput.value.length === 0 || emailRegex.test(emailInput.value)) {
            emailInput.style.borderColor = '#50C878'; // Green border for valid input or empty field
        } else {
            emailInput.style.borderColor = '#dc3545'; // Red border for invalid email
        }
    });

    // Handle password input on focus
    passwordInput.addEventListener('focus', function() {
        passwordInput.style.borderColor = ''; // Clear the border color on focus
    });

    // Handle password input on typing
    passwordInput.addEventListener('input', function() {
        if (passwordInput.value.length >= 8) {
            passwordInput.style.borderColor = '#50C878'; // Green border for valid input
        } else {
            passwordInput.style.borderColor = '#dc3545'; // Red border for invalid input
        }
    });

    // Optionally reset border color when the input loses focus and is empty
    emailInput.addEventListener('blur', function() {
        if (emailInput.value.length === 0) {
            emailInput.style.borderColor = ''; // Reset border color if input is empty
        }
    });

    passwordInput.addEventListener('blur', function() {
        if (passwordInput.value.length === 0) {
            passwordInput.style.borderColor = ''; // Reset border color if input is empty
        }
    });
});

</script>
