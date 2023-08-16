<!-- load header -->
<?php include('inc/header.php') ?>

<body class="dark-modes" id="contento">
    <!-- admin panel -->
    <section>
        <div class="admin-wrapper">

            <!-- load topbar -->
            <?php include('inc/topbar.php') ?>

            <div class="main-inner">
                <!-- load sidebar -->
                <?php include('inc/sidebar.php') ?>

                <!-- main content inner-->
                <div class="content-area p-lg-5 p-md-3 p-sm-2">
                    <div class="row">
                        <div class="col">
                            <div class="mycard p-5">
                                <h5 class="fs-1 text-color-black fw-bold">Navigation</h5>
                                <p class="text-color-black-light">lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit
                                </p>
                                <hr class="border-color">
                                <ul class="navigation-menu">
                                    <li class="">
                                        <a href="index.html"><i class="fa fa-home"></i> Dashboard</a>
                                    </li>
                                    /
                                    <li><a href="#!">Details </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="card mycard">
                                <div class="mycard-heading">
                                    <h2>Add Brand</h2>
                                </div>
                                <div class="my-card-body">
                                    <form action="">
                                        <!-- error -->
                                        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>Email or Password wrong!
                                        </div> -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="" class="input-lavel">Brand</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-bookmark"></i></span>
                                                    <input type="text" class="form-control" placeholder="test brand">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <label for="" class="input-lavel">Brand Slug</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-bookmark"></i></span>
                                                    <input type="text" class="form-control" placeholder="test brandryslug">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <button class="submit-btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="card mycard">
                                <div class="mycard-heading">
                                    <h2>All Brand</h2>
                                </div>
                                <div class="my-card-body table-responsive">
                                    <table id="model-list" class="detail-list table table-border">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Credit</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" width="150">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Samsung</th>
                                                <td>12</td>
                                                <td>12 jun 23</td>
                                                <td>
                                                    <span class="label label-warning">Panding</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="mybtn btn-blue">Edit</a>
                                                    <a href="#" class="mybtn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Apple</th>
                                                <td>12</td>
                                                <td>12 jun 23</td>
                                                <td>
                                                    <span class="label label-warning">Panding</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="mybtn btn-blue">Edit</a>
                                                    <a href="#" class="mybtn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nokia</th>
                                                <td>12</td>
                                                <td>12 jun 23</td>
                                                <td>
                                                    <span class="label label-warning">Panding</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="mybtn btn-blue">Edit</a>
                                                    <a href="#" class="mybtn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Sampony</th>
                                                <td>12</td>
                                                <td>12 jun 23</td>
                                                <td>
                                                    <span class="label label-warning">Panding</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="mybtn btn-blue">Edit</a>
                                                    <a href="#" class="mybtn btn-danger">Delete</a>
                                                </td>
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
    </section>



    <?php include('inc/footer.php') ?>