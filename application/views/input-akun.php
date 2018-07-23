<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 12:46:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.html">

    <title>Car Wash - Input Akun</title>

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

    <!--jqery steps-->
    <link href="<?php echo base_url(); ?>assets/vendor/jquery-steps/jquery.steps.css" rel="stylesheet">

    <!--custom styles-->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fixed-nav">

    <!--navigation : sidebar & header-->
    <?php
if ($this->session->userdata['logged_in']['jenis'] == 'Administrator') {

	include 'layout/sidebar.php';
} else {
	include 'layout/sidebar-pemilik.php';

}
?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Input Akun</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Akun</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input akun</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--/page title-->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Input Data Akun</div>
                            </div>
                        </div>
                        <?php echo $this->session->flashdata('msg'); ?>
                        <div class="card-body">
                            <div class="stepy-tab">
                                <ul id="default-titles" class="stepy-titles">
                                    <li id="default-title-0" class="current-step">
                                        <div>Account</div>
                                    </li>
                                    <li id="default-title-1" class="">
                                        <div>Personal</div>
                                    </li>
                                </ul>
                            </div>
                            <form class="" id="default" method="post" action="<?php echo site_url('akun/input_data_akun'); ?>">
                                <fieldset title="Step 1" class="step" id="default-step-1" >
                                    <legend> </legend>

                                    <h5 class="mb-3">Informasi Carwash</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Nama Carwash</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nama Carwash" name="nama_carwash" text="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">No Izin</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" placeholder="Kontak CarWash(HP/Telpon)" name="izin_carwash">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Kontak</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" placeholder="Kontak CarWash(HP/Telpon)" name="kontak_carwash">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Alamat Lengkap</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="alamat_carwash"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Deskripsi CarWash</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="deskripsi"></textarea>
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset title="Step2" class="step" id="default-step-0">
                                    <legend> </legend>
                                    <h5 class="mb-3">Akun Pemilik</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Username" name="username_pemilik">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" placeholder="Password" name="password_pemilik">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_pemilik" text="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Email Address" name="email_pemilik" text="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Tipe</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Pemilik" name="level_pemilik" text="Pemilik" disabled="true">
                                        </div>
                                    </div>


                                </fieldset>
                                <fieldset title="Step3" class="step" id="default-step-0">
                                    <legend> </legend>
                                    <h5 class="mb-3">Akun Kasir</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Username" name="username_kasir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" placeholder="Password" name="password_kasir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_kasir" text="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Email Address" name="email_kasir" text="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Tipe</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Kasir" name="level_kasir" text="Kasir" disabled="true">
                                        </div>
                                    </div>

                                </fieldset>

                                <input type="submit" class="finish btn btn-danger" value="Finish"/>
                            </form>
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

    <!--jquery validate-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>

    <!--jquery steps-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <!--init steps-->
    <script src="<?php echo base_url(); ?>assets/vendor/js-init/init-form-wizard.js"></script>

    <!--jquery stepy-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-steps/jquery.stepy.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
</body>
</html>

