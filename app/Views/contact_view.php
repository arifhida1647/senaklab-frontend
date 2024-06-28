<!doctype html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        .no-underline {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

    <style>
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body>
    <?php include (APPPATH . 'Views/includes/header.php'); ?>
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Contact</h2>
                </div>
                <div class="col-lg-8">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1240927578806!2d106.81590047576486!3d-6.247374061173106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d80fb83967%3A0x74b3a82704b28c8a!2sJl.%20Bangka%20II%20Gg.%20H.%20Abu%20Saman%20No.100%2C%20Pela%20Mampang%2C%20Kec.%20Mampang%20Prpt.%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012720!5e0!3m2!1sid!2sid!4v1719119525481!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Jl Bangka II No 100</h3>
                            <p> Pela Mampang</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0812 8135 2428</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ================ contact section end ================= -->


    <?php include (APPPATH . 'Views/includes/footer.php'); ?>


    <!-- jquery plugins here-->
    <script src="<?php echo base_url('assets') ?>/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url('assets') ?>/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url('assets') ?>/js/bootstrap.min.js"></script>
    <!-- magnific popup js -->
    <script src="<?php echo base_url('assets') ?>/js/jquery.magnific-popup.js"></script>
    <!-- carousel js -->
    <script src="<?php echo base_url('assets') ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="<?php echo base_url('assets') ?>/js/slick.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/contact.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery.form.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url('assets') ?>/js/custom.js"></script>
</body>

</html>