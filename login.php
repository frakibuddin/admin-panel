<!-- load header -->
<?php include('inc/header.php') ?>

<body class="light-mode">
    <section class="login-section mn-k-100vh py-5 d-flex align-items-center justify-content-center from-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="text-center mb-5">
                        <img src="assets/img/sim-unlocker-logo-dark-mode.png" width="220" alt="">
                    </div>
                    <div class="card mycard p-5">
                        <h1 class="text-color-black display-4 fw-bold mb-4">Login</h1>
                        <hr class="border-color mb-4">
                        <form action="" id="login-form">
                            <!-- error -->
                            <div class="alert alert-warning alert-dismissible fade hide message" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                        <input required type="text" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="input-group mb-3">

                                        <input type="text" disabled readonly class="form-control text-center captch_box" value="">

                                        <span class="input-group-text refresh_button cursor-pointer" id="basic-addon1">
                                            <i class="fa-solid fa-rotate-right"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="input-group mb-3">
                                        <input type="text" required class="form-control captch_input" placeholder="Enter captcha">
                                    </div>
                                </div>


                                <div class="col-md-12 my-4">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="checkbox" id="remember">
                                            <label for="remember" class="text-color-black">Remember me</label>
                                        </div>
                                        <a href="forget-password.html" class="text-color-black text-de-no fw-bold">Forgot Your Password?</a>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3 mb-4">
                                    <button type="submit" class="submit-btn w-100 login-btn">Login</button>
                                </div>
                                <p class="text-center text-color-black">Don't you have accout? <a href="registration.html">Registration</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <?php include('inc/footer.php') ?>