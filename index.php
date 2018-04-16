 <?php

ob_start();
session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
  } else {
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Petshop</title>

  <!--icheck-->
  <link href="js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="js/morris-chart/morris.css">

  <!--common-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">




  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="images/petshop.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <?php 
                if ($_SESSION['role'] == '3'){
                ?>
                <li class="active"><a href="index.php?page=admin/home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="StockBarang.php?page=admin/StockBarang"><i class="fa fa-briefcase"></i> <span>Stock Barang</span></a></li>
               <li><a href="Pembelian.php?page=admin/Pembelian"><i class="fa fa-shopping-cart"></i> <span>Pembelian</span></a></li>
               <li><a href="Penjualan.php?page=admin/Penjualan"><i class="fa fa-shopping-cart"></i> <span>Penjualan</span></a></li>
               <li><a href="Keuangan.php?page=admin/Keuangan"><i class="fa fa-money"></i> <span>Keuangan</span></a></li>
               <li><a href="Pegawai.php?page=admin/Pegawai"><i class="fa fa-users"></i> <span>Data Pegawai</span></a></li>
                <li><a href="?page=admin/login.php&aksi=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                <?php 
                } else if ($_SESSION['role'] == '2'){
                ?>
            <li class="active"><a href="index.php?page=gudang/home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="StockBarang.php?page=gudang/StockBarang"><i class="fa fa-briefcase"></i> <span>Stock Barang</span></a></li>
               <li><a href="Pembelian.php?page=gudang/Pembelian"><i class="fa fa-shopping-cart"></i> <span>Pembelian</span></a></li>
                  <li><a href="?page=gudang/login.php&aksi=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
               <?php 
                } else if($_SESSION['role'] == '1'){
               ?>
            <li class="active"><a href="index.php?page=kasir/home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="StockBarang.php?page=kasir/StockBarang"><i class="fa fa-briefcase"></i> <span>Stock Barang</span></a></li>
                <li><a href="Penjualan.php?page=kasir/Penjualan"><i class="fa fa-shopping-cart"></i> <span>Penjualan</span></a></li>
                   <li><a href="?page=kasir/login.php&aksi=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                <?php 
                }
                ?>
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
           
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    
                   
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            
                            <?php 
                            echo $_SESSION['username'];
                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                           
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Dashboard
            </h3>
            <ul class="breadcrumb">
                <li>
                     <?php
                    if($_SESSION['role'] == '3'){
                    ?>
                    <a href="index.php?page=admin/home">Home</a>
                    <?php
                }else if($_SESSION['role'] == '2'){
                    ?>
                 <a href="index.php?page=gudang/home">Home</a>
                 <?php
             }else{
                 ?>
                 <a href="index.php?page=kasir/home">Home</a>
             <?php
         }
             ?>
                </li>
                <li class="active"> My Dashboard </li>
            </ul>
            
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <?php 
            if($_SESSION['role'] =='3'){
            ?>
            <div class="row">
                <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple" href="Keuangan.php?page=admin/Keuangan">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Pendapatan</div>
                                    <div class="title">Rp 250,000,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red" href="StockBarang.php?page=admin/StockBarang">
                                <div class="symbol">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Barang</div>
                                    <div class="title">920</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--statistics end-->
                </div>
               <div class="col-md-6">
                    <!--statistics start-->
                   <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue" href="Pegawai.php?page=admin/Pegawai">
                                <div class="symbol">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Pegawai</div>
                                    <div class="title"> 4 Pegawai</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green" href="Penjualan.php?page=admin/Penjualan">
                                <div class="symbol">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Transaksi</div>
                                    <div class="title"> 15808</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
          <?php
      }else if($_SESSION['role'] == '1'){
        ?>
<div class="row">
                <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Pendapatan</div>
                                    <div class="title">Rp 250,000,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red" href="StockBarang.php?page=kasir/StockBarang">
                                <div class="symbol">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Barang</div>
                                    <div class="title">920</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--statistics end-->
                </div>
               <div class="col-md-6">
                    <!--statistics start-->
                   <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Pegawai</div>
                                    <div class="title"> 4 Pegawai</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green" href="Penjualan.php?page=kasir/Penjualan">
                                <div class="symbol">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Transaksi</div>
                                    <div class="title"> 15808</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <?php
      }else if($_SESSION['role'] == '2'){
        ?>
 <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Pendapatan</div>
                                    <div class="title">Rp 250,000,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red" href="StockBarang.php?page=gudang/StockBarang">
                                <div class="symbol">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Barang</div>
                                    <div class="title">920</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--statistics end-->
                </div>
               <div class="col-md-6">
                    <!--statistics start-->
                   <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Pegawai</div>
                                    <div class="title"> 4 Pegawai</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green" href="Pembelian.php?page=gudang/Pembelian">
                                <div class="symbol">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">Transaksi</div>
                                    <div class="title"> 15808</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <?php 
            }
            ?>
            

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="calendar-block ">
                                <div class="cal1">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel">
                        <header class="panel-heading">
                            Barang Habis
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="to-do-list" id="sortable-todo">
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check"/>
                                        <label for="todo-check"></label>
                                    </div>
                                    <p class="todo-title">
                                        Pasir Kucing
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check1"/>
                                        <label for="todo-check1"></label>
                                    </div>
                                    <p class="todo-title">
                                        Whiskas Ukuran 350 Gr
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                               
                               
                               

                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" class="form-inline">
                                        <div class="form-group todo-entry">
                                            <input type="text" placeholder="Tulis Barang Habis" class="form-control" style="width: 100%">
                                        </div>
                                        <button class="btn btn-primary pull-right" type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2018 &copy; Petshop
        </footer>
        <!--footer section end-->
<?php
    ob_flush();
    if(isset($_GET['aksi'])){

        if($_GET['aksi'] == 'logout'){
          header('location:login.php');
            session_destroy();
              
        }
    }
}
?>

    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<script src="js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="js/iCheck/jquery.icheck.js"></script>
<script src="js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="js/morris-chart/morris.js"></script>
<script src="js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="js/calendar/clndr.js"></script>
<script src="js/calendar/evnt.calendar.init.js"></script>
<script src="js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<!--Dashboard Charts-->

</body>
</html>

