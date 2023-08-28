<html lang="en">
@include('theme/login-theme')
<body>
    <div class="container login-container">
        <form action="" method="get">
            <div class="row justify-content-center align-items-center vh-100">
                <!-- Align vertically and take full viewport height -->
                <div class="col-md-5">
                    <div class="header text-center">
                        <img src="assets/ormeco-logo.png" alt="Logo" class="img-fluid logo">
                        <h1 class="header-text">ORMECO<span class="green-text">Warehouse</span></h1>
                        <p class="mt-1 text-md text-grey">Sign in</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control input-field" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control input-field"  placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field"
                                    class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-lg btn-block login-button">Login</button>
                    <p class="mt-3 text-center sign-up-text">Don't have an account yet?
                        <a href="{{ url('/register') }}" class="sign-up-link">Sign Up</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>