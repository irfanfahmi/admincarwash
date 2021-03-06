<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.html">

    <title>Login</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="<?php echo base_url(); ?>assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="<?php echo base_url(); ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

    <!--jquery ui-->
    <link href="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!--iCheck-->
    <link href="<?php echo base_url(); ?>assets/vendor/icheck/skins/all.css" rel="stylesheet">

    <!--custom styles-->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-bg">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5">Login</h4>
                    <form action="<?php echo site_url('login/logincek'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                        </div>

                        <div class="form-group clearfix">
                            <a href="#" class="float-left forgot-link my-2">Forgot Password ?</a>
                            <button type="submit" class="btn btn-purple float-right">LOGIN</button>
                        </div>
                        <div class="form-group clearfix">
                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                        <div class="form-divider"></div>

                        <!-- <a href="#" class="btn btn-facebook text-uppercase"><i class="fa fa-facebook-square"></i> Login with facebook</a> -->
                        <div class="text-center mt-4">
                            <a href="<?php echo site_url('register'); ?>" class="btn-link text-capitalize f12">Create New Account</a>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                <!--login promo-->
                <div class="login-promo basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="#" class="mb-4 d-block">
                            <img class="pr-3" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x" alt="">
                            <span class="text-uppercase weight800 text-white f18">CarWash</span>
                        </a>
                        <h1 class="text-white">Let’s Start The Journey</h1>
                        <p>Enter the most beautiful admin ever</p>
                        <a href="#" class="play-btn mt-4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!--/login promo-->

            </div>
        </div>
    </div>

    <!--basic scripts-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/icheck/skins/icheck.min.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

</body>
</html>

