<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
    <link rel="icon" href="<?php echo base_url('assets') ?>/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .no-underline {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url('/') ?>"> <img
                                src="<?php echo base_url('assets') ?>/img/logo.png" alt="logo"
                                class=" d-none d-lg-block"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/') ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=<?php echo base_url('about') ?>>about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Service
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('product-list-cleaning') ?>">Cleaning</a>
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('product-list-repaint') ?>">Repaint</a>
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('product-list-repair') ?>">Repair</a>
                                        <a class="dropdown-item" href="<?php echo base_url('product-list') ?>">All
                                            Services</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('contact') ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header_icon d-flex align-items-center">
                            <a href="<?php echo base_url('history-orders') ?>" class="mr-3">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <?php if (!session()->get('user_id')) { ?>
                                <a href="<?php echo base_url('login') ?>" class="btn btn-primary">
                                    Login
                                </a>
                            <?php } ?>
                            <?php if (session()->get('user_id')) { ?>
                                <a href="<?php echo base_url('logout') ?>" class="btn btn-danger mr-2">
                                    Logout
                                </a>
                                <a href="<?php echo base_url('profiles') ?>" class="btn btn-primary">
                                    Profiles
                                </a>
                            <?php } ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
</body>

</html>