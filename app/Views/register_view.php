<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <?php include (APPPATH . 'Views/includes/header.php'); ?>

    <!--================ Register Area =================-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 my-5">
                    <div class="register-form">
                        <h3>Welcome to our website!<br>Please Sign Up now</h3>
                        <form class="contact_form" action="#" method="POST" novalidate="novalidate">
                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="member_fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="member_fullName"
                                            name="member_fullName" placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="member_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="member_email" name="member_email"
                                            placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="member_username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="member_username"
                                            name="member_username" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="member_password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="member_password"
                                            name="member_password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control" id="zip_code" name="zip_code"
                                            placeholder="Zip Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" id="street" name="street"
                                            placeholder="Enter street">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter City">
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Enter State">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" value="REGISTER" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="<?= base_url('login') ?>" class="btn btn-danger">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Register end =================-->

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>