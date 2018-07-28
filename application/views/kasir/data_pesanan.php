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
    <?php $this->load->view('kasir/layout/sidebar');?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data Pesanan</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('kasir') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pesanan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pesanan</li>
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
                                <div class="custom-title">Data Pesanan</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pelanggan</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Tanggal Cuci</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
                                        <!-- <th>Note</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <!-- <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Biaya</th>
                                        <th>Kuota</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </tfoot> -->
                                    <tbody>
                                    <?php $no = 1;foreach ($carwash as $value): ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $value->nama_pemesan; ?></td>
                                        <td><?php echo $value->tanggal_pesan; ?></td>
                                        <td><?php echo $value->tanggal_cuci; ?></td>
                                        <td><?php echo $value->nama_tipe; ?></td>
                                        <td><?php echo $value->status_bayar; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('kasir/setujui_permintaan_pemesanan/') . $value->id_pemesanan; ?>" class="btn btn-warning"><i class="fa fa-check"></i></a>
                                            <button class="btn btn-success" onclick="lihat(<?php echo $value->id_pemesanan ?>)"><i class="icon-pencil"></i></button>
                                            <a href="<?php echo base_url('kasir/batalkan_pemesanan/') . $value->id_pemesanan ?>" class="btn btn-danger"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++;endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal_lihat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Data Pesanan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Kode Pesanan</th>
                                                            <td id="kode">kode pesanan</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-muted">
                                                        <tr>
                                                            <th scope="col">Nama</th>
                                                            <td id="nama">nama</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Jenis Mobil</th>
                                                            <td id="tipe">Tipe mobil</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">No. Polisi</th>
                                                            <td id="nopol">nopol</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Jenis Cuci</th>
                                                            <td id="jenis">Jenis cuci</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Waktu Cuci</th>
                                                            <td id="waktu">waktu cuci</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Status Bayar</th>
                                                            <td id="bayar">status bayar</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Bukti Bayar</th>
                                                            <td><img src="" alt="" id="bukti"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary" id="lunas">Lunas</button>
                                    </div>
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

    <script>
        function lihat(id_pesan) {
            $.ajax({
                url: '<?php echo base_url() ?>Kasir/lihat_pemesanan',
                type: 'post',
                dataType: 'json',
                data: {'id_pesan': id_pesan},
            })
            .done(function(res) {
                console.log(res);
                $('#kode').html(res.id_pemesanan);
                $('#nama').html(res.nama_pemesan);
                $('#tipe').html(res.jenis);
                $('#nopol').html(res.plat_nomor);
                $('#jenis').html(res.nama_tipe);
                $('#waktu').html(res.tanggal_cuci + " - " + res.jam_cuci + ":00");
                $('#bayar').html(res.status_bayar);
                $('#bukti').attr('src', '<?php echo base_url('uploads/') ?>)' + res.bukti_bayar);
                $('#modal_lihat').modal('show');
            })
            .fail(function() {
                console.log("error");
            });
        }

        $('#lunas').on('click', function() {
            var kode = $('#kode').html();
            $.ajax({
                url: '<?php echo base_url('Kasir/lunas') ?>',
                type: 'post',
                dataType: 'json',
                data: {'kode': kode},
            })
            .done(function() {
                console.log("success");
                $(location).attr('href','<?php echo base_url() ?>kasir/pesanan');
            })
            .fail(function() {
                console.log("error");
            });
            $('#modal_lihat').modal('hide');
        });
    </script>
</body>

</html>

