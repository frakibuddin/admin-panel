<!-- load header -->
<?php include('inc/header.php') ?>

<body class="light-mode">

    <!-- admin panel -->
    <section>
        <div class="admin-wrapper">
            <!-- load topbar -->
            <?php include('inc/topbar.php') ?>

            <div class="main-inner">

                <!-- load sidebar -->
                <?php include('inc/sidebar.php') ?>

                <div class="content-area p-lg-5 p-md-3 p-sm-2">
                    <div class="row">
                        <div class="col">
                            <div class="mycard p-5">
                                <h5 class="fs-1 text-color-black fw-bold">Navigation</h5>
                                <p class="text-color-black-light">lorem ipsum dolor sit amet,
                                </p>
                                <hr class="border-color">
                                <ul class="navigation-menu">
                                    <li class="">
                                        <a href="index.php"><i class="fa fa-home"></i> Dashboard</a>
                                    </li>
                                    /
                                    <li><a href="#!">Profile </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <div class="mycard p-5  text-center">
                                <img src="assets/img/img_avatar2.png" class="mb-2 w-25 border border-3 rounded-circle border-color" alt="">
                                <p class="text-color-black">Smit jon</p>
                                <button class="mybtn btn-blue d-flex align-items-center justify-content-center gap-3 w-50 m-auto">
                                    <i class="fa-solid fa-upload"></i>
                                    Upload
                                </button>
                            </div>

                            <div class="mycard p-5 mt-4">
                                <div class="row mt-4">
                                    <div class="col-md-12 ">
                                        <div class="input-group mb-4">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                            <input type="text" class="form-control " value="Current password">
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                            <input type="text" class="form-control " value="New password">
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                            <input type="text" class="form-control " value="Confirm password">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 mb-4">
                                        <button class="submit-btn w-100">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="mycard p-5">
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-solid fa-signature"></i>
                                            </span>
                                            <input type="text" class="form-control" value="Full Name">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control " value="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </span>
                                            <input type="number" class="form-control " value="898987">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-brands fa-telegram"></i>
                                            </span>
                                            <input type="text" class="form-control " value="Telegram">
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

                                    <div class="col-md-12 mt-3 mb-4">
                                        <button class="submit-btn w-100">Update</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('inc/footer.php') ?>