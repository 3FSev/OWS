<html lang="en">
@include('theme/login-register-theme')
<body>
    <div class="container login-container">
        <form method="POST" action="{{ route('register') }}">
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
                        <input id="name" type="text" class="form-control input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">
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

                    <div class="input-group mb-3">
                        <select name="district" id="district" class="form-control" required>
                            <option value="" disabled selected>District</option>
                            @foreach($districts as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('district')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>

                    <div class="input-group mb-3">
                        <select name="department" id="department" class="form-control" required>
                            <option value="" disabled selected>Department</option>
                            @foreach($departments as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control input-field @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="input-group mb-5">
                        <input id="password-confirm" type="password" class="form-control input-field" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-confirm" class="fa fa-fw field-icon toggle-password-confirm fa-eye"></span>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-lg btn-block login-button">{{ __('Register') }}</button>
                    <p class="mt-3 text-center sign-up-text">There is already an account.
                        <a href="{{ url('/login') }}" class="sign-up-link">Login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>