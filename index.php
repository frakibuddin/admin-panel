<!-- load header -->
<?php include('inc/header.php') ?>

<body class="light-mode">

    <!-- alert message -->
    <!-- <div class="alert alert-danger alert-dismissible fade show my-alert" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->

    <!-- admin panel -->
    <section>
        <div class="admin-wrapper">

            <!-- load topbar -->
            <?php include('inc/topbar.php') ?>

            <div class="main-inner">

                <!-- load sidebar -->
                <?php include('inc/sidebar.php') ?>

                <!-- main content inner-->
                <div class="content-area p-lg-5 p-md-3 p-sm-2 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="admin-card">
                                <div class="admin-card-top">
                                    <h3 class=" fw-bold fs-2 mb-3">Orders Received</h3>
                                    <div class="card-count flex-wrap d-flex align-items-center justify-content-between ">
                                        <h2 class="">$234</h2>
                                        <i class="fa-solid fa-cart-shopping display-3 "></i>
                                    </div>
                                </div>

                                <div class="admin-card-bottom" overflow: hidden;">
                                    <a href="" class="text-decoration-none d-flex align-items-center justify-content-between px-5 position-absolute bottom-0 w-100">
                                        <p>Completed Orders : </p>
                                        <p>312</p>
                                    </a>
                                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                                        <path d="M-6.56,36.28 C149.99,150.00 340.93,-23.71 505.31,55.27 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgba(82, 147, 238, 0.527);"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="admin-card">
                                <div class="admin-card-top">
                                    <h3 class="fw-bold fs-2 mb-3">Totale Sale</h3>
                                    <div class="card-count flex-wrap d-flex align-items-center justify-content-between ">
                                        <h2 class="">$8349</h2>

                                        <i class="fa-brands fa-connectdevelop display-3 "></i>
                                    </div>
                                </div>

                                <div class="admin-card-bottom" overflow: hidden;">
                                    <a href="" class="text-decoration-none d-flex align-items-center justify-content-between px-5  position-absolute bottom-0 w-100">
                                        <p>This Month : </p>
                                        <p>312</p>
                                    </a>
                                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                                        <path d="M-6.56,36.28 C149.99,150.00 340.93,-23.71 505.31,55.27 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgba(82, 147, 238, 0.527)"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="admin-card">
                                <div class="admin-card-top">
                                    <h3 class="fw-bold fs-2 mb-3">Revenue</h3>
                                    <div class="card-count flex-wrap d-flex align-items-center justify-content-between ">
                                        <h2 class="">$334</h2>
                                        <i class="fa-solid fa-money-check-dollar display-3"></i>
                                    </div>
                                </div>

                                <div class="admin-card-bottom" overflow: hidden;">
                                    <a href="" class="text-decoration-none d-flex align-items-center justify-content-between px-5 position-absolute bottom-0 w-100">
                                        <p>This Month : </p>
                                        <p>312</p>
                                    </a>
                                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                                        <path d="M-6.56,36.28 C149.99,150.00 340.93,-23.71 505.31,55.27 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgba(82, 147, 238, 0.527);"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="admin-card-gradient label-primary ">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="section-heading">
                                        <h2 class="fw-bold display-1 ">80</h2>
                                        <h3 class="txt-dark fs-2 mb-4 gsearch">Support Model</h3>
                                    </div>
                                    <div>
                                        <i class="fa-brands fa-buromobelexperte text-color display-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="admin-card-gradient label-success">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="section-heading">
                                        <h2 class="fw-bold display-1 ">80</h2>
                                        <h3 class="txt-dark fs-2 mb-4 gsearch">Support Model</h3>
                                    </div>
                                    <div>
                                        <i class="fa-brands fa-buromobelexperte text-color display-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="admin-card-gradient label-danger">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="section-heading">
                                        <h2 class="fw-bold display-1 ">80</h2>
                                        <h3 class="txt-dark fs-2 mb-4 gsearch">Support Model</h3>
                                    </div>
                                    <div>
                                        <i class="fa-brands fa-buromobelexperte text-color display-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="mycard py-4">
                                <ul class="nav nav-tabs row mb-3 text-center" id="ex1" role="tablist">
                                    <div class="col-md-3">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active d-flex align-items-center gap-3 justify-content-center" id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
                                                <i class="fa-solid fa-house "></i>
                                                Home</a>
                                        </li>
                                    </div>
                                    <div class="col-md-3">
                                        <li class="nav-item " role="presentation">
                                            <a class="nav-link d-flex align-items-center gap-3 justify-content-center" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
                                                <i class="fa-solid fa-key"></i>
                                                Security
                                            </a>
                                        </li>
                                    </div>
                                    <div class="col-md-3">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link d-flex align-items-center gap-3 justify-content-center" id="ex1-tab-3" data-bs-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">
                                                <i class="fa-solid fa-location-crosshairs"></i>
                                                Panding
                                            </a>
                                        </li>
                                    </div>
                                    <div class="col-md-3">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link d-flex align-items-center gap-3 justify-content-center" id="ex1-tab-4" data-bs-toggle="tab" href="#ex1-tabs-4" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">
                                                <i class="fa-solid fa-check"></i>
                                                Completed
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                                <div class="tab-content px-5 mt-5" id="ex1-content">
                                    <div class="tab-pane fade show active table-responsive" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Customer</th>
                                                    <th scope="col">Purchased On</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-warning">Panding</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-success">Completed</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-danger"> Faild </span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Customer</th>
                                                    <th scope="col">Purchased On</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-warning">Panding</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-success">Completed</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-danger"> Faild </span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Customer</th>
                                                    <th scope="col">Purchased On</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-warning">Panding</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-warning">Panding</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-danger"> Faild </span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Customer</th>
                                                    <th scope="col">Purchased On</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-success">Completed</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-success">Completed</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                                <tr>
                                                    <td>PNG002413</td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2017 </td>
                                                    <td><span class="label label-success">Completed</span></td>
                                                    <td><a href="#" class="mybtn btn-blue">Detail</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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