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
                                    <li><a href="#!"> Users </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mycard">
                                <div class="mycard-heading">
                                    <h2>All Users</h2>
                                </div>
                                <div class="my-card-body table-responsive">
                                    <table id="model-list" class="model-list table table-border" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="30">SL</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Telegram</th>
                                                <th scope="col">Country</th>
                                                <th scope="col" width="100">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>Jon smit</td>
                                                <td>smit@gamil.com</td>
                                                <td>983487944</td>
                                                <td>teleuser</td>
                                                <td>Pakistan</td>
                                                <td>
                                                    <a href="#" class="mybtn btn-blue">Active</a>
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