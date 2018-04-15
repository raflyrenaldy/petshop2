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
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Stock Barang</title>

  <!--data table-->
  <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

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
            <a href="index.html"><img src="images/rsz_icon.png" alt=""></a>
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
                <li><a href="page=admin/index.php&aksi=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                <?php 
                } else if ($_SESSION['role'] == '2'){
                ?>
            <li class="active"><a href="index.php?page=gudang/home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="StockBarang.php?page=gudang/StockBarang"><i class="fa fa-briefcase"></i> <span>Stock Barang</span></a></li>
               <li><a href="Pembelian.php?page=gudang/Pembelian"><i class="fa fa-shopping-cart"></i> <span>Pembelian</span></a></li>
                  <li><a href="?page=gudang/index.php&aksi=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
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
                        <img src="images/photos/user-avatar.png" alt="" />
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
                Stock Barang
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
            
                <li class="active"> Stock Barang </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    Stock Barang
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <a href="#myModal-1" data-toggle="modal" class="btn btn-xs btn-success">
                             Tambah Data <i class="fa fa-plus"></i>
                        </a>
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Tambah Data</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form class="form-horizontal" role="form">
                                               <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Nama</label>
                                                    <input type="text" class="form-control" id="inputPassword4"  style="width: 80%">
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Ukuran</label>
                                                      <input type="number" data-trigger="click" data-content="Pilih Jenis Ukuran" data-placement="top" data-toggle="popover" class="form-control popovers"  style="width: 60%" >
                                                    <select class="form-control" style="width: 20%">
                                                        <option>Pilih</option>
                                                        <option>Gr</option>
                                                        <option>Kg</option>
                                                    </select>
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Jenis</label>
                                                   <select class="form-control" style="width: 80%">
                                                        <option>Pilih</option>
                                                        <option>Kucing</option>
                                                        <option>Anjing</option>
                                                        <option>Burung</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Stock</label>
                                                     <input type="number" data-trigger="click" data-content="Pilih Jenis Stock" data-placement="top" data-toggle="popover" class="form-control popovers"  style="width: 60%" value="1" disabled>
                                                    <select class="form-control" style="width: 20%">
                                                        <option>Pilih</option>
                                                        <option>Pcs</option>
                                                        <option>Dus</option>
                                                        <option>Karung</option>
                                                    </select>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Harga</label>
                                                    <input type="number" class="form-control" id="inputPassword4" style="width: 80%">
                                                  
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button  onclick="func0()" type="button" class="btn btn-primary">
                                                    Simpan
                                                    </button>
                                                </div>
                                            </div>
                                          
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
<div id="myModal-3" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div id="myP" class="modal-body">
        Harap Tunggu
      </div>
      <div class="progress">
  <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
    <span id="current-progress"></span>
  </div>
</div>
      <div class="modal-footer">
         <button onclick="myFunction2()"  type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button onclick="myFunction()" id="myBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
                 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Edit Data</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form class="form-horizontal" role="form">
                                               <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Id Barang</label>
                                                    <input id="idbrg2"type="text" class="form-control" id="inputPassword4"  style="width: 80%"  disabled>
                                                  
                                                </div>
                                            </div>
                                               <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Nama</label>
                                                    <input id="namabrg" type="text" class="form-control" id="inputPassword4"  style="width: 80%" >
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Ukuran</label>
                                                      <input id="ukuran" type="number" data-trigger="click" data-content="Pilih Jenis Ukuran" data-placement="top" data-toggle="popover" class="form-control popovers"  style="width: 60%" >
                                                    <select id="MySelect1" class="form-control" style="width: 20%">
                                                        <option>Pilih</option>
                                                        <option>Gr</option>
                                                        <option>Kg</option>
                                                    </select>
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Jenis</label>
                                                   <select id="MySelect3" class="form-control" style="width: 80%">
                                                        <option>Pilih</option>
                                                        <option value="Kucing">Kucing</option>
                                                        <option value="Anjing">Anjing</option>
                                                        <option value="Burung">Burung</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Stock</label>
                                                     <input id="stock" type="number" data-trigger="click" data-content="Pilih Jenis Stock" data-placement="top" data-toggle="popover" class="form-control popovers"  style="width: 60%"  disabled>
                                                    <select id="MySelect2" class="form-control" style="width: 20%" >
                                                        <option>Pilih</option>
                                                        <option value="Pcs">Pcs</option>
                                                        <option value="Dus">Dus</option>
                                                        <option value="Karung">Karung</option>
                                                    </select>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Harga</label>
                                                    <input id="harga" type="number" class="form-control" id="inputPassword4" style="width: 80%" >
                                                  
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button onclick="func00()" type="button" class="btn btn-primary" data-toggle="modal" >
Simpan
</button>

                                                </div>
                                            </div>

                                         
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                         <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div id="myP2" class="modal-body">
        Harap Tunggu
      </div>
      <div class="progress">
  <div id="dynamic2" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
    <span id="current-progress"></span>
  </div>
</div>
      <div class="modal-footer">
        <button onclick="myFunction1()" id="myBtn3" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button onclick="myFunction()" id="myBtn2" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <?php
                    if($_SESSION['role'] == '3'){
                    ?>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Ukuran</th>
                    <th>Jenis</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                    <?php
                }else{
                    ?>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Ukuran</th>
                    <th>Jenis</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <?php
                }
                ?>
                </tr>
                </thead>
                <tbody>
                    <?php
                    if($_SESSION['role'] == '3'){
                    ?>
                <tr class="">
                    <td id="idbrg" value="K10001">K10001</td>
                    <td>Power King</td>
                    <td>350 Gr</td>
                    <td class="center">Kucing</td>
                    <td>50 Pcs</td>
                    <td>Rp 50,000</td>                        
                    <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func2()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td id="idbrg" value="K10002">K10002</td>
                    <td>Whiskas</td>
                    <td>1 Kg</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 150,000</td>
                     <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func3()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>                        
                 
                </tr>
                 <tr class="">
                    <td id="idbrg" value="K10003">K10003</td>
                    <td>Whiskas</td>
                    <td>500 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 65,000</td>   
                     <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func4()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>                     
                   
                </tr>
                 <tr class="">
                    <td id="idbrg" value="K10004">K10004</td>
                    <td>Whiskas</td>
                    <td>350 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 45,000</td>                        
                     <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func5()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td>K10005</td>
                    <td>Shampoo</td>
                    <td>500 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 25,000</td>                        
                     <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func2()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td>K10006</td>
                    <td>Black</td>
                    <td>200 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 15,000</td>                        
                     <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func2()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td>K10007</td>
                    <td>Shampoo</td>
                    <td>350 Gr</td>
                    <td class="center">Anjing</td>
                    <td>50 Pcs</td>
                    <td>Rp 40,000</td>                        
                    <td align="center"><button class="btn btn-warning" href="#myModal-2" data-toggle="modal" type="button"  onclick="func2()">Edit</button> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                <?php
                }else{
                    ?>
                    <tr class="">
                    <td id="idbrg" value="K10001">K10001</td>
                    <td>Power King</td>
                    <td>350 Gr</td>
                    <td class="center">Kucing</td>
                    <td>50 Pcs</td>
                    <td>Rp 50,000</td>                        
                    
                </tr>
                 <tr class="">
                    <td id="idbrg" value="K10002">K10002</td>
                    <td>Whiskas</td>
                    <td>1 Kg</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 150,000</td>
                                     
                 
                </tr>
                 <tr class="">
                    <td id="idbrg" value="K10003">K10003</td>
                    <td>Whiskas</td>
                    <td>500 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 65,000</td>   
                      
                   
                </tr>
                 <tr class="">
                    <td id="idbrg" value="K10004">K10004</td>
                    <td>Whiskas</td>
                    <td>350 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 45,000</td>                        
                    
                </tr>
                 <tr class="">
                    <td>K10005</td>
                    <td>Shampoo</td>
                    <td>500 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 25,000</td>                        
                     
                </tr>
                 <tr class="">
                    <td>K10006</td>
                    <td>Black</td>
                    <td>200 Gr</td>
                    <td class="center">Kucing</td>
                    <td>1 Pcs</td>
                    <td>Rp 15,000</td>                        
                   
                </tr>
                 <tr class="">
                    <td>K10007</td>
                    <td>Shampoo</td>
                    <td>350 Gr</td>
                    <td class="center">Anjing</td>
                    <td>50 Pcs</td>
                    <td>Rp 40,000</td>                        
                   
                </tr>
                <?php
            }
            ?>
                </tbody>
                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2018 &copy; Petshop
        </footer>
        <!--footer section end-->


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

<!--data table-->
<script type="text/javascript" src="js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<!--script for editable table-->
<script src="js/editable-table.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

<script>
    function func0(){
$('#myModal-1').modal('hide');
 $('#myModal-3').modal({
                        backdrop: 'static',
                        keyboard: true, 
                        show: true
                }); 
$(function() {
  var current_progress = 0;

  document.getElementById("myBtn").disabled = true;
  var interval = setInterval(function() {

      current_progress += 10;
      $("#dynamic")
      
      .css("width", current_progress + "%")
      .attr("aria-valuenow", current_progress)
      .text(current_progress + "% Complete");
      if (current_progress >= 100){
        document.getElementById("myP").innerHTML = "Berhasil Menambah Data!";
         document.getElementById("myBtn").disabled = false;
          clearInterval(interval);
      }
  }, 1000);
});

}
</script>
<script>
    function func00(){
$('#myModal-2').modal('hide');
 $('#myModal-4').modal({
                        backdrop: 'static',
                        keyboard: true, 
                        show: true
                }); 
$(function() {
  var current_progress = 0;

  document.getElementById("myBtn2").disabled = true;
  var interval = setInterval(function() {
      current_progress += 10;
      $("#dynamic2")
      
      .css("width", current_progress + "%")
      .attr("aria-valuenow", current_progress)
      .text(current_progress + "% Complete");
      if (current_progress >= 100){
        document.getElementById("myP2").innerHTML = "Berhasil Update Data!";
         document.getElementById("myBtn2").disabled = false;
          clearInterval(interval);
      }
  }, 1000);
});
}
</script>
<script>
function myFunction() {
    location.reload();
}
</script>
<script>
function myFunction1() {
    location.reload();
    alert("Canceled")
}
function myFunction2() {
    location.reload();
    alert("Canceled")
}
</script>
<script>
function func1() {
      var txt;
    var r = confirm("Data Akan Dihapus?");
    if (r == true) {
        alert("Data Telah Terhapus!");
    } else {
        alert("Data Tidak Terhapus!");
    }
}
</script>

<script>
    function func2(){
        if(document.getElementById("idbrg").value = "K10001" ){

         document.getElementById("idbrg2").value="K10001";
         document.getElementById("namabrg").value="Power King";
         document.getElementById("ukuran").value="350";
         document.getElementById("MySelect1").value = "Gr";
         document.getElementById("MySelect2").value = "Pcs";
         document.getElementById("MySelect3").value = "Kucing";   
         document.getElementById("harga").value="50000";
          document.getElementById("stock").value="50";
              }
       
    }
</script>
<script>
    function func3(){
        
             if(document.getElementById("idbrg").value = "K10002" ){
         document.getElementById("idbrg2").value="K10002";
         document.getElementById("namabrg").value="Whiskas";
         document.getElementById("ukuran").value="1";
         document.getElementById("MySelect1").value = "Kg";
         document.getElementById("MySelect2").value = "Pcs";
         document.getElementById("MySelect3").value = "Kucing";   
         document.getElementById("harga").value="150000";
         document.getElementById("stock").value="1";
    }
       
    }
</script>
<script>
    function func4(){
        
              if(document.getElementById("idbrg").value = "K10003" ){
                 document.getElementById("idbrg2").value="K10003";
         document.getElementById("namabrg").value="Whiskas";
         document.getElementById("ukuran").value="500";
         document.getElementById("MySelect1").value = "Gr";
         document.getElementById("MySelect2").value = "Pcs";
         document.getElementById("MySelect3").value = "Kucing";   
         document.getElementById("harga").value="65000";
         document.getElementById("stock").value="1";
       }
    }
</script>
<script>
    function func5(){
        
             if(document.getElementById("idbrg").value = "K10004" ){
                 document.getElementById("idbrg2").value="K10004";
         document.getElementById("namabrg").value="Whiskas";
         document.getElementById("ukuran").value="350";
         document.getElementById("MySelect1").value = "Gr";
         document.getElementById("MySelect2").value = "Pcs";
         document.getElementById("MySelect3").value = "Kucing";   
         document.getElementById("harga").value="45000";
         document.getElementById("stock").value="1";
              }
       
    }
</script>
</body>
</html>
<?php
    ob_flush();
    if(isset($_GET['aksi'])){

        if($_GET['aksi']=='logout'){
            session_destroy();
            header('location:login.php');
        }
    }
}
?>