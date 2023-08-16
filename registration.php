<!-- load header -->
<?php include('inc/header.php') ?>

<body class="light-mode">
    <section class="registration-section mn-k-100vh py-5 d-flex align-items-center justify-content-center from-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="text-center mb-5">
                        <img src="assets/img/sim-unlocker-logo-dark-mode.png" width="220" alt="">
                    </div>
                    <div class="card mycard p-5">
                        <h1 class="text-color-black display-4 fw-bold mb-4">Registration</h1>
                        <hr class="border-color mb-4">
                        <form action="">
                            <!-- error -->
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Email or Password wrong!
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-signature"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control " placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </span>
                                        <input type="number" class="form-control " placeholder="Whatapp">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-brands fa-telegram"></i>
                                        </span>
                                        <input type="text" class="form-control " placeholder="Telegram">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-earth-americas"></i>
                                        </span>
                                        <select class="form-control">
                                            <option value="">Select Country</option>
                                            <option value="">USA</option>
                                            <option value="">India</option>
                                            <option value="">Pakistan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-key"></i>
                                        </span>
                                        <input type="password" class="form-control " placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-key"></i>
                                        </span>
                                        <input type="password" class="form-control " placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="col-md-12 my-4">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="checkbox" id="remember">
                                            <label for="remember" class="text-color-black">I agree to the terms and
                                                conditions Terms & Conditions</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 mb-4">
                                    <button class="submit-btn w-100">Regintration</button>
                                </div>
                                <p class="text-center text-color-black">Do you have already accout? <a href="login.html">Login</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <?php include('inc/footer.php') ?>