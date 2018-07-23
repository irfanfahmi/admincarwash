<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.html">

    <title>Car Wash - Dashboard</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

    <!--vector maps -->
    <link href="<?php echo base_url(); ?>assets/vendor/vector-map/jquery-jvectormap-1.1.1.css" rel="stylesheet" >

    <!--c3chart-->
    <link href="<?php echo base_url(); ?>assets/vendor/c3chart/c3.min.css" rel="stylesheet">

    <!--custom styles-->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fixed-nav leftnav-floating">

<!--navigation : sidebar & header-->
<?php
if ($this->session->userdata['logged_in']['jenis'] == 'Administrator') {

	include 'layout/sidebar.php';
} elseif ($this->session->userdata['logged_in']['jenis'] == 'Pemilik') {
	include 'layout/sidebar-pemilik.php';
} else {
	include 'layout/sidebar-kasir.php';
}
?>
<!--/navigation : sidebar & header-->

<!--main content wrapper-->
<div class="content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="creative-state-area basic-gradient">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <h4 class="creative-state-title">My CarWash</h4>
                        </div>
                        <div class="col-lg-5  col-12 text-lg-right">
                            <div class="row short-states mb-lg-0 mb-4">
                                <div class="col-6">
                                    <span class="pr-2">Kostumer</span>
                                    <span id="unique_visitors"></span>
                                </div>
                                <div class="col-6">
                                    <span class="pr-2">total Profit</span>
                                    <span id="total_visitors"></span>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($carwash as $value): ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="creative-state-icon bg-purple text-center pull-left">
                                <i class="vl_dollar-on-hand"></i>
                            </div>
                            <div class="creative-state-info text-center pull-left">
                            <h3 class="mt-4"><?php echo $value->nama; ?></h3>
                                <h3 class="mt-4">23214</h3>
                                <p class="mb-0">total profit</p>
                                <div class="clearfix"></div>
                                <h3 class="mt-4">12</h3>
                                <p class="mb-0"><a href="">total antrian</a></p>
                                <div class="">
                                    <canvas id="state_profit_chart" height="80"></canvas>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php include 'layout/footer.php';?>
    <!--/footer-->
</div>
<!--/main content wrapper-->

<!--right sidebar-->

<!--/right sidebar-->

<!--basic scripts-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/icheck/skins/icheck.min.js"></script>

<!--sparkline-->
<script src="<?php echo base_url(); ?>assets/vendor/sparkline/jquery.sparkline.js"></script>
<!--sparkline initialization-->
<script src="<?php echo base_url(); ?>assets/vendor/js-init/sparkline/init-sparkline.js"></script>

<!--c3chart-->
<script src="<?php echo base_url(); ?>assets/vendor/c3chart/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/c3chart/c3.min.js"></script>
<!--c3chart initialization-->
<script src="<?php echo base_url(); ?>assets/vendor/js-init/c3chart/init-c3chart.js"></script>

<!--chartjs-->
<script src="<?php echo base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
<!--chartjs initialization-->
<script src="<?php echo base_url(); ?>assets/vendor/js-init/chartjs/init-bubble-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js-init/chartjs/init-mixed-chart.js"></script>

<!--vectormap-->
<script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery-jvectormap-us-aea.js"></script>
<!--vectormap initialization-->
<script src="<?php echo base_url(); ?>assets/vendor/js-init/vmap/init-vmap-world.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js-init/vmap/init-vmap-usa.js"></script>

<!--to do list-->
<script src="<?php echo base_url(); ?>assets/vendor/icheck/skins/icheck.min.js"></script>
<!--to do list initialization-->
<script src="<?php echo base_url(); ?>assets/vendor/js-init/init-todo-list.js"></script>

<!--[if lt IE 9]>
<script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--basic scripts initialization-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

</body>
</html>

