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
                        <input type="name" class="form-control input-field" placeholder="Full Name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control input-field" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="district" class="form-control">
                            <option value="" selected disabled>District</option>
                            <option value="1">District I</option>
                            <option value="2">District II</option>
                            <option value="3">District III</option>
                            <option value="4">District IV</option>
                            <option value="5">District V</option>
                            <option value="6">District VI</option>
                            <option value="7">District VII</option>
                            <option value="8">District VIII</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select name="Department" class="form-control">
                            <option value="" selected disabled>Department</option>
                            <option value="OGM">OGM</option>
                            <option value="CPD">CPD</option>
                            <option value="FSD">FSD</option>
                            <option value="PGD">PGD</option>
                            <option value="ISD">ISD</option>
                            <option value="ASD">ASD</option>
                            <option value="IAD">IAD</option>
                            <option value="TSD">TSD</option>
                            <option value="BOD">BOD</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control input-field"  placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field"
                                    class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" name="confirm password" class="form-control input-field"  placeholder="Confirm Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field"
                                    class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-lg btn-block login-button">Register</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>