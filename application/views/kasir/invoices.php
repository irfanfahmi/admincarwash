
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Invoice</title>

    <!--web fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

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

<body>

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card card-shadow mb-4 p-5">
                        <div class="card-body">
                             <div class="row py-4">
                                 <div class="col-sm-8">
                                     <img src="assets/img/invoice-logo.jpg" srcset="assets/img/invoice-logo@2x.jpg 2x" alt=""/>

                                     <h1 class="text-info weight300 my-5">Pemesanan</h1>
                                 </div>
                             </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-5">
                                        <div class="col-4">
                                            <small class="text-muted text-uppercase weight600">Total</small>
                                            <h5 class="mb-0">Rp. <?php echo $biaya ?></h5>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted text-uppercase weight600">Tanggal cuci</small>
                                            <h5 class="mb-0"><?php echo $tanggal ?></h5>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted text-uppercase weight600">Kode pesanan</small>
                                            <h5 class="mb-0"><?php echo $id_transaksi ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                     <address class="mb-5">
                                         <strong>Nama Cuci</strong>
                                         <br> <span class="text-muted">Alamat tempat cuci</span>
                                         <br> <span class="text-muted">Victoria 3000 Australia</span>
                                     </address>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Kode Pesanan</th>
                                                <td><?php echo $id_transaksi ?></td>
                                            </tr>
                                            </thead>
                                            <tbody class="text-muted">
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <td><?php echo $nama_pelanggan ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jenis Mobil</th>
                                                <td><?php echo $merk_mobil ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">No. Polisi</th>
                                                <td><?php echo $nopol ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jenis Cuci</th>
                                                <td><?php echo $nama_tipe ?></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    <!--basic scripts-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/icheck/skins/icheck.min.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>

