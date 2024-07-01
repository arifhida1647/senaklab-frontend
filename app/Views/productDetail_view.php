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
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Single Product Area =================-->
    <?php if (isset($dataItem)): ?>
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="product_img_slide owl-carousel">
                            <div class="single_product_img">
                                <img src="<?php echo base_url('assets') ?>/img/product/single_product.png" alt="#"
                                    class="img-fluid">
                            </div>
                            <div class="single_product_img">
                                <img src="<?php echo base_url('assets') ?>/img/product/single_product.png" alt="#"
                                    class="img-fluid">
                            </div>
                            <div class="single_product_img">
                                <img src="<?php echo base_url('assets') ?>/img/product/single_product.png" alt="#"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="single_product_text text-center">
                            <h3><?php echo $dataItem['item_name']; ?><br>
                                <?php echo $dataItem['category']; ?><br>
                                <?php echo $dataItem['waktu']; ?>
                            </h3>
                            <p>
                                <?php echo $dataItem['description']; ?>
                            </p>
                            <div class="card_area">
                                <div class="product_count_area">
                                    <p>Price</p>
                                    <p>Rp <?php echo $dataItem['price']; ?></p>
                                </div>
                                <div class="add_to_cart" id="tombolSimpan">
                                    <form action="<?php echo base_url('/order'); ?>" method="post">
                                        <input type="hidden" name="user_id" value="<?php echo session()->get('user_id') ?>">
                                        <!-- Sesuaikan dengan user_id yang benar -->
                                        <input type="hidden" name="item_id" value="<?php echo $dataItem['item_id']; ?>">
                                        <input type="hidden" name="total_amount" value="<?php echo $dataItem['price']; ?>">
                                        <div class="form-group">
                                            <label for="order_address">Alamat Tujuan:</label>
                                            <input type="text" name="order_address" id="order_address" class="form-control"
                                                required>
                                        </div>
                                        <button type="submit" class="btn_3">Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="product_img_slide owl-carousel">
                            <div class="single_product_img">
                                <img src="img/product/single_product.png" alt="#" class="img-fluid">
                            </div>
                            <div class="single_product_img">
                                <img src="img/product/single_product.png" alt="#" class="img-fluid">
                            </div>
                            <div class="single_product_img">
                                <img src="img/product/single_product.png" alt="#" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="single_product_text text-center">
                            <h3>Foam filling cotton slow <br>
                                rebound pillows</h3>
                            <p>
                                Seamlessly empower fully researched growth strategies and interoperable internal or
                                “organic” sources. Credibly innovate granular internal or “organic” sources whereas high
                                standards in web-readiness. Credibly innovate granular internal or organic sources whereas
                                high standards in web-readiness. Energistically scale future-proof core competencies
                                vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal
                                networks.
                            </p>
                            <div class="card_area">
                                <div class="product_count_area">
                                    <p>Quantity</p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" type="text" value="1" min="0"
                                            max="10">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <p>$5</p>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" class="btn_3">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic”
                            sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->


    <?php include (APPPATH . 'Views/includes/footer.php'); ?>

</body>

</html>