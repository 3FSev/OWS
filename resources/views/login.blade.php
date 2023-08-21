<html lang="en">
@include('theme/login-theme')

<body style="background-image: url('assets/ormeco-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container login-container">
        <div class="row justify-content-center align-items-center vh-100">
            <!-- Align vertically and take full viewport height -->
            <div class="col-md-5">
                <div class="header text-center">
                    <img src="assets/ormeco-logo.png" alt="Logo" class="img-fluid" style="max-width: 100px;">
                    <h1><span style="color: #1A5D1A; font-weight:bold;">ORMECO</span>
                        <span style="color: black; font-weight:bold;">Warehouse</span></h1>
                    <p class="mt-3 text-md" style="color: grey;">Sign in</p>
                </div>
                <form class="p-3">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email"  style="height: 45px;">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" style="height: 45px;">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" <button type="submit"
                        class="btn btn-primary btn-lg btn-block"
                        style="background-color: #285430; border-color: #285430; height: 50px;" 
                        onmouseover="this.style.backgroundColor='#3a7845'; this.style.borderColor='#3a7845';"
                        onmouseout="this.style.backgroundColor='#285430'; this.style.borderColor='#285430';">Login</button>
                        <p class="mt-3 text-center">Don't have an account yet?<a href="#" style="color: #538653;">SignUp</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>