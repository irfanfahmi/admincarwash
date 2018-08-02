<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 12:46:56 GMT -->
<head>
    <?php //$this->load->view('kasir/layout/head'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.html">

    <title>Car Wash</title>

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

    <!--select2-->
    <link href="<?php echo base_url(); ?>assets/vendor/select2/css/select2.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="<?php echo base_url(); ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fixed-nav">

    <!--navigation : sidebar & header-->
    <?php $this->load->view('kasir/layout/sidebar');?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Edit Profil Carwash</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('kasir') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Account Setting</a></li>
                        
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
                                <div class="custom-title">Edit Profil Carwash</div>
                            </div>
                        </div>
                        <?php echo $this->session->flashdata('msg'); ?>
                        <div class="card-body">
                            <!-- <div class="stepy-tab">
                                <ul id="default-titles" class="stepy-titles">
                                    <li id="default-title-0" class="current-step">
                                        <div>Basic</div>
                                    </li>
                                    <li id="default-title-1" class="">
                                        <div>Operational</div>
                                    </li>
                                </ul>
                            </div> -->
                            <form class="" id="default" method="post" action="<?php echo base_url('kasir/proses_transaksi'); ?>" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Nama Carwash</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Nama Carwash" name="nama_pelanggan">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">No Izin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="No Izin" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Kontak</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Kontak" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Email" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Nama Pemilik</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Nama Pemilik" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Alamat" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Deskripsi" name="nama_pelanggan">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">logo Carwash</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="logo Carwash" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">No Rekening</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="No Rekening" name="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Nama Bank</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Nama Bank" name="nama_pelanggan">
                                    </div>
                                </div>

                                
                                <input type="submit" class="finish btn btn-danger" value="Simpan"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--footer-->
        
        <!--/footer-->
    </div>
    <!--/main content wrapper-->

    <!--right sidebar-->
    <!--/right sidebar-->

    <!--basic scripts-->

    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/date-picker/js/bootstrap-datepicker.min.js"></script>
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
    <script>
        $('#jenis').on('change', function() {
            var id = $('#jenis').val();
            $.ajax({
                url: '<?php echo base_url() ?>Kasir/ambil_harga',
                type: 'post',
                dataType: 'json',
                data: {'id': id},
            })
            .done(function(res) {
                $('#biaya').val(res.harga);
            })
            .fail(function() {
                console.log("error");
            });
        });

        $('#datepicker').datepicker({
            // format: "dd MM yyyy",
            format: "yyyy-mm-dd",
        });
    </script>
</body>
</html>

