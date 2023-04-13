<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Ranch | Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>res/assets/css/style.css">
</head>
<body class="account-page">
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content" style="margin:0 auto;">
                    <div class="login-userset">
                        <!-- <div class="login-logo">
                            <img src="assets/img/logo.png" alt="img">
                        </div> -->
                        <?php if ($this->session->flashdata('success-msg')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success-msg'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error-msg')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error-msg'); ?></div>
                            <?php } ?>
                        <div class="login-userheading">
                            <h3><center>Sign In</center></h3>
                            <h4>Please login to your account</h4>
                        </div>
                        <form action="<?php echo base_url('auth/login_post'); ?>" method="POST">                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" name="email" placeholder="Enter your email address">
                                <img src="<?php echo base_url() ?>res/assets/img/icons/mail.svg" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" name="password" placeholder="Enter your password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-login">
                            <button class="btn btn-login" type="submit">Sign In</button>
                        </div>
                        </form>

                        
                        
                    </div>
                </div>
<!-- <div class="login-img">
<img src="assets/img/login.jpg" alt="img">
</div> -->
</div>
</div>
</div>
<script src="<?php echo base_url() ?>res/assets/js/jquery-3.6.0.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/feather.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/script.js"></script>
</body>
</html>