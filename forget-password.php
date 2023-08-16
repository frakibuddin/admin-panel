<!-- load header -->
<?php include('inc/header.php') ?>

<body class="light-mode">
    <section class="login-section vh-100 d-flex align-items-center justify-content-center from-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="text-center mb-5">
                        <img src="assets/img/sim-unlocker-logo-dark-mode.png" width="220" alt="">
                    </div>
                    <div class="card mycard p-5">
                        <h1 class="text-color-black display-4 fw-bold mb-4">Reset Password</h1>
                        <hr class="border-color mb-4">
                        <form action="">
                            <!-- error -->
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Yor Email is wrong!
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-regular fa-envelope"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 mb-4 mt-4">
                                    <button class="submit-btn w-100">Submit</button>
                                </div>
                                <p class="text-center text-color-black">Do you know password? <a href="login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <?php include('inc/footer.php') ?>