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
                                <p class="text-color-black-light">lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit
                                </p>
                                <hr class="border-color">
                                <ul class="navigation-menu">
                                    <li class="">
                                        <a href="index.html"><i class="fa fa-home"></i> Dashboard</a>
                                    </li>
                                    /
                                    <li><a href="#!">Brand </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mycard">
                                <div class="mycard-heading">
                                    <h2>All Brand</h2>
                                </div>
                                <div class="my-card-body table-responsive">
                                    <table id="model-list" class="model-list table table-border" style="width: 100%;">
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
            <!-- <div class="footer">footer</div> -->
        </div>
    </section>


    <?php include('inc/footer.php') ?>