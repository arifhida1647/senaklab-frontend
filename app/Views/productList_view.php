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
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container bg-transparent my-4 p-3">
            <div class="row">
                <?php foreach ($dataItem as $k => $v) { ?>
                    <div class="col-lg-4 col mb-2">
                        <div class="card h-100 shadow-sm">
                            <img src="<?php echo base_url('assets') ?>/img/repair.png" class="card-img-top"
                                alt="Product Image">
                            <div class="card-body">
                                <div class="clearfix mb-3">
                                    <span
                                        class="float-start badge rounded-pill bg-primary"><?= htmlspecialchars($v['item_name']); ?></span>
                                    <span class="float-end price-hp">Rp <?= number_format($v['price'], 2); ?></span>
                                </div>
                                <h5 class="card-title"><?= htmlspecialchars($v['item_name']); ?></h5>
                                <h5 class="card-title my-3"><?= htmlspecialchars($v['category']); ?></h5>
                                <div class="text-center my-4">
                                    <a href="<?= site_url('/product-detail') ?>/<?= $v['item_id'] ?>"
                                        class="btn btn-warning">Check Offer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="<?php echo base_url('assets') ?>/img/client.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to
                                help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="<?php echo base_url('assets') ?>/img/client_1.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to
                                help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="<?php echo base_url('assets') ?>/img/client_2.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to
                                help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->

    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                            internal or organic sources
                            whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic”
                            sources. Credibly innovate granular internal or “organic” sources whereas high standards in
                            web-readiness.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="<?php echo base_url('assets') ?>/img/icon/feature_icon_1.svg" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="<?php echo base_url('assets') ?>/img/icon/feature_icon_2.svg" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="<?php echo base_url('assets') ?>/img/icon/feature_icon_3.svg" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="<?php echo base_url('assets') ?>/img/icon/feature_icon_4.svg" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <?php include (APPPATH . 'Views/includes/footer.php'); ?>

    
</body>

</html>