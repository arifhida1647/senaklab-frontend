<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="img/favicon.png">
</head>

<body>
    <?php include (APPPATH . 'Views/includes/header.php'); ?>

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>confirmation</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================ confirmation part start =================-->
    <section class="confirmation_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>order info</h4>
                        <ul>
                            <li>
                                <p>order number</p><span>: <?php echo $dataOrders[0]['order_id']; ?></span>
                            </li>
                            <li>
                                <p>data</p><span>: <?php echo $dataOrders[0]['order_date']; ?></span>
                            </li>
                            <li>
                                <p>total</p><span>: Rp <?php echo $dataOrders[0]['total_amount']; ?></span>
                            </li>
                            <li>
                                <p>Status</p><span>: <?php echo $dataOrders[0]['status']; ?></span>
                            </li>
                            <li>
                                <p>Alamat Tujuan</p><span>: <?php echo $dataOrders[0]['order_address']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>User Info</h4>
                        <ul>
                            <li>
                                <p>Username</p><span>: <?php echo $dataOrders[0]['username']; ?></span>
                            </li>
                            <li>
                                <p>Name</p><span>: <?php echo $dataOrders[0]['full_name']; ?></span>
                            </li>
                            <li>
                                <p>Email</p><span>: <?php echo $dataOrders[0]['email']; ?></span>
                            </li>
                            <li>
                                <p>Phone Number</p><span>: <?php echo $dataOrders[0]['phone_number']; ?></span>
                            </li>
                            <li>
                                <p>Address</p><span>: <?php echo $dataOrders[0]['address']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Item Info</h4>
                        <ul>
                            <li>
                                <p>Nama</p><span>: <?php echo $dataOrders[0]['item_name']; ?></span>
                            </li>
                            <li>
                                <p>Waktu</p><span>: <?php echo $dataOrders[0]['waktu']; ?></span>
                            </li>
                            <li>
                                <p>Category</p><span>: <?php echo $dataOrders[0]['category']; ?></span>
                            </li>
                            <li>
                                <p>Description</p><span>: <?php echo $dataOrders[0]['description']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php if ($dataOrders[0]['status'] != 'Pending'): ?>

                <?php else: ?>
                    <div class="col-lg-6 col-lx-4">
                        <div class="single_confirmation_details">
                            <h4 class="text-danger">Please Payment</h4>
                            <ul>
                                <li>
                                    <p>BCA</p><span>: 122121221 A.n Laundry</span>
                                </li>
                                <li>
                                    <p>BNI</p><span>: 122121221 A.n Laundry</span>
                                </li>
                                <li>
                                    <p>BRI</p><span>: 122121221 A.n Laundry</span>
                                </li>
                                <li>
                                    <p>GoPay</p><span>: 0826152527 A.n Laundry</span>
                                </li>
                            </ul>
                            <form action="<?= site_url('confirmation/cancel_order') ?>" method="post">
                                <input type="hidden" name="order_id" value="<?php echo $dataOrders[0]['order_id']; ?>">
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="order_details_iner">
                        <h3>Order Details</h3>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Product</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="2"><span><?php echo $dataOrders[0]['item_name']; ?></span></th>
                                    <th> <span><?php echo $dataOrders[0]['price']; ?></span></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ confirmation part end =================-->

    <?php include (APPPATH . 'Views/includes/footer.php'); ?>

</body>

</html>