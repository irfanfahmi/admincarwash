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

    <title>CarWarsh</title>

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
    <?php $this->load->view('layout/sidebar-pemilik');?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Laporan Transaksi</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="http://localhost/admincarwash/beranda">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laporan Transaksi</li>
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
                                <div class="custom-title">Laporan Transaksi</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Merk Mobil</th>
                                        <th>No. Polisi</th>
                                        <th>Tanggal</th>
                                        <th>Jenis</th>
                                        <th>Biaya</th>
                                       
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                    </thead>
                                    <?php
                                    $total = 0;
                                    ?>
                                    <?php $no = 1;foreach ($carwash as $value): ?>

                                            <?php 
                                            $maybe=$value->biaya;
                                            $total=$maybe+$total; ?>
                                            <?php $no++;endforeach;?>
                                    <tfoot>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th>Total </th>
                                        <th><?php echo number_format($total,0) ?></th>

                                        
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                   
                                    <?php $no = 1;foreach ($carwash as $value): ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $value->nama_pelanggan; ?></td>
                                        <td><?php echo $value->merk_mobil; ?></td>
                                        <td><?php echo $value->nopol; ?></td>
                                        <td><?php echo date("d F Y", strtotime($value->tanggal)); ?></td>
                                        <td><?php echo $value->nama_tipe; ?></td>
                                        <td><?php echo $value->biaya; ?></td>
                            
                                     
                                    <?php $no++;endforeach;?>
                                     </tr>
                                    <td></td>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
        <!-- <?php include 'kasir/layout/footer.php';?> -->
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

