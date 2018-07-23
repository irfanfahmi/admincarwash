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
    $this->load->view('kasir/layout/sidebar');
}
?><!--/navigation : sidebar & header-->

<!--main content wrapper-->
<div class="content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4 pt-4 bg-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="custom-title-wrap border-0 mt-2 mb-4">
                                    <div class="custom-title text-light">Short Reports</div>
                                    <div class="custom-post-title">Here are some short report examples</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="media d-flex align-items-center  mb-4">
                                    <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                        <i class="vl_user-male"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-uppercase mb-0 weight500 text-light">4,87,654</h4>
                                        <span class="text-muted">Visit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="media d-flex align-items-center  mb-4">
                                    <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                        <i class="vl_download"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-uppercase mb-0 weight500 text-light">4,87,654</h4>
                                        <span class="text-muted">Downloads</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="media d-flex align-items-center  mb-4">
                                    <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                        <i class="vl_shopping-bag2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-uppercase mb-0 weight500 text-light">4,87,654</h4>
                                        <span class="text-muted">Active Installation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-turquoise">
                            <div class="custom-title">Sales Monitor</div>

                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-md-5">
                                <p class="text-muted mb-5">Proper sell monitoring through the world map to plan <br/>
                                    for the next marketing attempt</p>

                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Europe</span>
                                        <span class="float-right">35%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-turquoise" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Latin America </span>
                                        <span class="float-right">55%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Australia</span>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="map-wrapper" id="world-map"> </div>
                            </div>
                        </div>
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

