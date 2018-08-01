<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

    <!--brand name-->
    <a class="navbar-brand" href="#" data-jq-dropdown="#jq-dropdown-1">
        <img class="pr-3 float-left" src="<?php echo base_url(); ?>assets/img/logo-icon.png" srcset="<?php echo base_url(); ?>assets/img/logo-icon@2x.png 2x"  alt=""/>
        <div class="float-left">
            <div>CarWash</div>
        </div>
    </a>
    <!--/brand name-->

    <!--brand mega menu-->

    <!--/responsive rightside toogle-->

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!--left side nav-->
        <ul class="navbar-nav left-side-nav" id="accordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo base_url('kasir/dashboard') ?>">
                    <i class="vl_dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pesanan">
                <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#antri">
                    <i class="ti-receipt"></i>
                    <span class="nav-link-text">Pesanan </span>
                </a>
                <ul class="sidenav-second-level collapse" id="antri" data-parent="#accordion">
                    <li> <a href="<?php echo site_url('kasir/input_pesanan'); ?>">Input Pesanan</a> </li>
                    <li> <a href="<?php echo site_url('kasir/pesanan'); ?>">Kelola Pesanan</a></li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
                <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#transaksi">
                    <i class="ti-money"></i>
                    <span class="nav-link-text">Transaksi </span>
                </a>
                <ul class="sidenav-second-level collapse" id="transaksi" data-parent="#accordion">
                    <li> <a href="<?php echo site_url('kasir/input_transaksi'); ?>">Input Transaksi</a> </li>
                    <li> <a href="<?php echo site_url('kasir/transaksi'); ?>">Kelola Transaksi</a> </li>
                </ul>
            </li>

        </ul>
        <!--/left side nav-->

        <!--nav push link-->
        <!--/nav push link-->

        <!--header leftside links-->
       <ul class="navbar-nav header-links ml-auto hide-arrow">
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-thumb">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/img/avatar/avatar1.jpg" alt=""/>
                        <?php echo $this->session->userdata['logged_in']['nama'] . ' (' . $this->session->userdata['logged_in']['jenis'] . ')'; ?>
                    </div>
                    <sap
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('login/logout'); ?>">Sign Out</a>
                </div>
            </li>
       </ul>
        <!--/header rightside links-->

    </div>
</nav>