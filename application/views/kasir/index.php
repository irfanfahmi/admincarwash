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

    <!-- theme style -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/icon-font.css" rel="stylesheet" type="text/css"/> <!-- icon-font css -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Poppins:400,500,700" rel="stylesheet"> <!-- google font -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/style1.css" rel="stylesheet" type="text/css"/> <!-- custom css -->

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

    <!--datetime & time picker-->
    <link href="<?php echo base_url(); ?>assets/vendor/datetime-picker/css/datetimepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/timepicker/css/timepicker.css" rel="stylesheet">

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
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Dashboard</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                           <!--  <li class="breadcrumb-item"><a href="<?php echo base_url('kasir/Dashboard') ?>">Dashboard</a></li> -->
                           
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
                                <div class="custom-title">Dashboard</div>
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


      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="plan-1">
          <div class="row" >
          
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">75K</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Book Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">100K</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Book Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Gold Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">125K</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Book Now</a>

                </div>
              </div>
            </div>
             <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Platinum Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">150K</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>

                  <a href="#" class="btn btn-orange">Book Now</a>

                </div>
              </div>
            </div>
            
            <!-- Batas-->
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end plans -->



                          
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
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/anytime-picker/anytime.5.2.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/date-picker/js/bootstrap-datepicker.min.js"></script>
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

    <!--datetime picker-->
    <script src="<?php echo base_url(); ?>assets/vendor/datetime-picker/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/timepicker/js/bootstrap-timepicker.js"></script>
    <!--init datetime picker-->
    <script src="<?php echo base_url(); ?>assets/vendor/js-init/pickers/init-datetime-picker.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.appear.js"></script> <!-- progress bar js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.countdown.js"></script>  <!-- event countdown js -->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/bootstrap-datepicker.js"></script> <!-- bootstrap datepicker js--> 
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/jquery.elevatezoom.js"></script> <!-- image zoom js-->
<script type="text/javascript" src="<?php echo base_url('assets_dashboard/'); ?>js/theme.js"></script> <!-- custom js -->  

    <!--[if lt IE 9]>pickatime/
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

        $('#status_bayar').on('change', function() {
            var status = $('#status_bayar').val();
            var biaya = $('#biaya').val();
            console.log(biaya);
            if (status === 'lunas') {
                $('#uang').val(biaya);
            } else {
                $('#uang').val('');
            }
        });

        $('#tanggal').datepicker({
            // format: "dd MM yyyy",
            format: "yyyy-mm-dd",
        });

        $('#tanggal').on('change', function() {
            var tanggal = $('#tanggal').val();
            $.ajax({
                url: '<?php echo base_url() ?>Kasir/get_waktu',
                type: 'post',
                dataType: 'json',
                data: {'tanggal': tanggal},
            })
            .done(function(res) {
                $.each(res, function(index, val) {
                    console.log($('#waktu').val());
                    $('#waktu option[value=10]').prop("disabled", true);

                });
            })
            .fail(function() {
                console.log("error");
            })
            .always(function(res) {
                // console.log(res);
            });

        });
    </script>
</body>
</html>

