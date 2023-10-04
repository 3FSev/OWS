<html lang="en">
@include('theme\login-register-theme')
<body>
    <div class="container login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row justify-content-center align-items-center vh-100">
                <!-- Align vertically and take full viewport height -->
                <div class="col-md-5">
                    <div class="header text-center">
                        <img src="assets/ormeco-logo.png" alt="Logo" class="img-fluid logo">
                        <h1 class="header-text">ORMECO<span class="green-text">Warehouse</span></h1>
                        <p class="mt-1 text-md text-grey">Sign in</p>
                    </div>
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="input-group mb-5">
                        <input id="password" type="password" class="form-control input-field @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field"
                                    class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <button type="submit" class="btn-lg btn-block login-button">{{ __('Login') }}</button>
                    <p class="mt-3 text-center sign-up-text">Don't have an account yet?
                        <a href="{{ url('/register') }}" class="sign-up-link">Sign Up</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
