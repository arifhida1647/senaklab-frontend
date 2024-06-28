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

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome to our website ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="#" method="POST" novalidate="novalidate">
                                <?php if (session()->getFlashdata('error')) { ?>
                                    <div class="alert-danger alert">
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                                <?php } ?>
                                <div class="col-md-12 form-group p_star">
                                    <label for="member_username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="member_username" name="member_username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="member_password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="member_password"
                                        name="member_password" value="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" name="login" value="LOGIN" class="btn_3">
                                        log in
                                    </button>
                                    <a href="<?php echo base_url('register') ?>">Create Account?</a>
                                    <a class="lost_pass" href="<?php echo base_url('contact') ?>">need Help?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_image">
                        <img src="<?php echo base_url('assets') ?>/img/single_product_1.png" alt="Login Image"
                            class="img-fluid border">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

</body>

</html>