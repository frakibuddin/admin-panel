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

                <!-- main content inner-->
                <div class="content-area p-lg-5 p-md-3 p-sm-2">
                    <div class="row">
                        <div class="col">
                            <div class="mycard p-5">
                                <div class="card-body text-color-black">
                                    <div class="invoice-title">
                                        <h4 class="float-end font-size-15">Invoice No. #DS0204
                                            <div class="mt-3">
                                                <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                                <p>12 Oct, 2020</p>
                                            </div>
                                        </h4>

                                        <div class="mb-4">
                                            <h2 class="mb-1 ">Demo Name</h2>
                                        </div>
                                        <div class="">

                                            <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> xyz@987.com</p>
                                            <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="fs-3 bold mb-3">Payment Details</h5>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <h5 class="fs-3 ">Payment Method</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fs-4">Paypal</h6>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-6">
                                            <h6 class="fs-2 ">Payment Date</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fs-4">12 june 2023</h6>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-6">
                                            <h5 class="font-size-15">Payment Date</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="font-size-15">12 june 2023</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="mt-5">
                                        <h5 class="fs-3 text-color-black mb-3">Payment Details</h5>
                                    </div>
                                    <hr class="my-4">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap table-centered mb-0 text-light">
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px;">No.</th>
                                                    <th>Item</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th class="text-end" style="width: 120px;">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">01</th>
                                                    <td>

                                                        <h5 class="text-color-black fs-4 mb-1"> Product one</h5>

                                                    </td>
                                                    <td>$ 245.50</td>
                                                    <td>1</td>
                                                    <td class="text-end">$ 245.50</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">02</th>
                                                    <td>
                                                        <h5 class="text-color-black fs-4 mb-1">Product two
                                                        </h5>
                                                    </td>
                                                    <td>$ 245.50</td>
                                                    <td>2</td>
                                                    <td class="text-end">$491.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">03</th>
                                                    <td>
                                                        <div>
                                                            <h5 class="text-color-black fs-4 mb-1">Product three
                                                            </h5>

                                                        </div>
                                                    </td>
                                                    <td>$ 245.50</td>
                                                    <td>2</td>
                                                    <td class="text-end">$491.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="text-end">Sub Total</th>
                                                    <td class="text-end">$732.50</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        Discount :</th>
                                                    <td class="border-0 text-end">- $25.50</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        Shipping Charge :</th>
                                                    <td class="border-0 text-end">$20.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        Tax</th>
                                                    <td class="border-0 text-end">$12.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                                    <td class="border-0 text-end">
                                                        <h4 class="m-0 fw-semibold">$739.00</h4>
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
        </div>
    </section>


    <?php include('inc/footer.php') ?>