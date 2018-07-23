<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2016 .
**********************************************************************************************************  -->
<!-- 
Template Name: Auto Plus – Car Wash and Car Repair HTML Template
Version: 1.0.0
Author: Media City
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Auto Plus – Car Wash &amp; Car Repair HTML Template</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Auto Plus" />
<meta name="keywords" content="car wash, html template, car wash template, auto plus, car repair, auto wash, auto detail, auto detailing, car, cleaning, mechanic, repair, wash, car service, workshop">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="<?php echo base_url('assets_dashboard/'); ?>images/favicon/favicon.ico"> <!-- favicon-icon -->
<!-- theme style -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/icon-font.css" rel="stylesheet" type="text/css"/> <!-- icon-font css -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Poppins:400,500,700" rel="stylesheet"> <!-- google font -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="<?php echo base_url('assets_dashboard/'); ?>css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
<!--  top bar -->
  <div class="top-bar hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="info-bar">
            <ul>
              <li><i class="fa fa-envelope" aria-hidden="true"></i> info@carwash.com</li>
              <li>|</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>(+01) 123 456 7890</li>
            </ul>
          </div>          
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="top-bar-right">
            <div class="top-menu hidden-sm">
              <ul>
                <li><a href="#">Schedule</a></li>
                <li>|</li>
                <li><a href="#">News</a></li>
                <li>|</li>
                <li><a href="#">Faq</a></li>
              </ul>
            </div>
            <div class="social-icon">
              <ul>
                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end top bar -->
<!--  navigation -->
  <div class="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo">
            <a href="index-2.html"><img src="<?php echo base_url('assets_dashboard/'); ?>images/logo.png" alt="logo"></a>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="navigation">
            <div id="cssmenu">
              <ul>
                <li><a href="http://localhost/admincarwash/">Home</a></li>                
                <li><a href="#">Daftar Carwash</a></li>                
              
                <li><a href="#">Services</a>
                <li style="background-color:#613A43; color: white;"><a href="http://localhost/admincarwash/login" style="color:white;">Login</a>
                <li style="background-color:#36384C; color: white;"><a href="http://localhost/admincarwash/Beranda/register" style="color:white;" >Register</a>
                </li>                
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
<!--  end navigation -->
<!--  appointments -->
  <div id="appointments" class="appointment-main-block appointment-two-main-block">
    <div class="container">
      <div class="row">
        <div class="section text-center">
          <h3 class="section-heading text-center">Register Pemilik Carwash</h3>
          <p class="sub-heading text-center"></p>
        </div>
        <div class="col-md-4 hidden-sm">
          <div class="appointment-img">
            <img src="<?php echo base_url('assets_dashboard/'); ?>images/appointment.jpg" class="img-responsive" alt="Appointment">
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="appointment-block">
            <form id="appointment-form" class="appointment-form" method="post" action="<?php echo site_url('Beranda/input_data_akun'); ?>">

            <h5 class="form-heading-title">
            <span class="form-heading-no">1.</span>Carwash Detail</h5>
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="nama" placeholder="Nama Carwash" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="alamat" placeholder="Alamat Carwash" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phone" name="no_izin" placeholder="No Izin Carwash" required>
                </div>
                
                <div class="col-sm-12">
                  <textarea id="message" name="deskripsi" rows="6" placeholder="Deskripsi carwash"></textarea>
                  <div class="col-sm-12">
                  <input type="file"  id="phone" name="logo_carwash" placeholder="logo carwash" required>
                </div>
                </div>
                </div>

                <h5 class="form-heading-title">
            <span class="form-heading-no">2.</span>Pemilik Detail</h5>
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="nama_pemilik" placeholder="Nama Pemilik" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" name="kontak" placeholder="No. Handphone" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phone" name="email" placeholder="Email Pemilik" required>
                </div>
               
               
              </div>
                <br>
              
              
              <button type="submit" class="btn btn-default pull-right">Regstrasi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end appointments -->
<!--  footer -->
  <footer id="footer" class="footer-main-block">
    <div class="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-about footer-widget">
              <h5 class="footer-heading">About Us</h5>
              <img src="<?php echo base_url('assets_dashboard/'); ?>/images/logo-white.png" class="img-responsive" alt="logo">
              <p>Lorem ipsum dolor sit amet, consectetuer a dipiscing elit aenean commodo ligula eget in
              dolor aenean massa cum sociis natoque penatibus et magnis dis parturie.</p>              
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-services footer-widget">
              <h5 class="footer-heading">Our Services</h5>
              <ul>
               
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-opening footer-widget">
              <h5 class="footer-heading">Opening Hours</h5>
              <div class="row">
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-subscribe footer-widget">
              <h5 class="footer-heading">Subscribe Newsletter</h5>
              <p>Lorem ipsum dolor sit amet consectetuer elit aenean commodo ligula eget dolo.</p>
              <form id="subscribe-form" class="subscribe-form">
                <div class="form-group">
                  <label class="sr-only">Your Email address</label>
                  <input type="email" class="form-control" id="mc-email" placeholder="Enter email address">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                <label for="mc-email"></label>
              </form>
              <div class="social-icon">
                <span>Follow us on:</span>
                <ul>
                  <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <hr>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text text-center">
              <p>&copy; Copyrights 2016 <a href="index.html">Carwash</a>. | All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--  end footer -->
<!-- jquery -->
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
<!-- end jquery -->
</body>
<!--body end -->
</html>