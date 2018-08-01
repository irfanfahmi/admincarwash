    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 12:46:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.html">

    <title>CarWarsh - Data Akun</title>

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

    <!--data table-->
    <link href="<?php echo base_url(); ?>assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
        if($this->session->userdata['logged_in']['jenis']=='Administrator'){

            include 'layout/sidebar.php'; 
        }else{
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
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data Akun</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Akun</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Akun</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--/page title-->
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Data Akun</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Carwash</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($akun as $value): ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $value->id_carwash; ?></td>
                                        <td><?php echo $value->username; ?></td>
                                        <td><?php echo $value->nama_lengkap; ?></td>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->level; ?></td>
                                        <td>
                                            <?php if($value->status=='Aktif'){ ?>
                                                <a href="<?php echo site_url('akun/nonaktifkan_akun/').$value->id_akun; ?>" class="btn btn-warning"><i class="fa fa-times"></i></a>
                                                <a href="" class="btn btn-success"><i class="icon-pencil"></i></a>
                                                <a href="" class="btn btn-danger"><i class="icon-trash"></i></a>
                                            <?php }else{ ?>
                                                <a href="<?php echo site_url('akun/aktifkan_akun/').$value->id_akun; ?>" class="btn btn-warning"><i class="fa fa-check"></i></a>
                                                <a href="" class="btn btn-success"><i class="icon-pencil"></i></a>
                                                <a href="" class="btn btn-danger"><i class="icon-trash"></i></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php $no++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
        <?php include 'layout/footer.php'; ?>
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

    <!--datatables-->
    <script src="<?php echo base_url(); ?>assets/vendor/data-tables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>
    <!--init datatable-->
    <script src="<?php echo base_url(); ?>assets/vendor/js-init/init-datatable.js"></script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
</body>

</html>

