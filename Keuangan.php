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

  <title>Keuangan</title>

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
                Keuangan
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
            
                <li class="active"> Keuangan </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
keuangan                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    
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
                                                   <select id="MySelect6" class="form-control" style="width: 40%" disabled>
                                                        <option>Pilih</option>
                                                        <option>K10001</option>
                                                        <option>K10002</option>
                                                        <option>K10003</option>
                                                        <option>K10004</option>
                                                    </select>
                                                    <input id="namabrg" type="text" class="form-control" id="inputPassword4"  style="width: 40%" disabled>
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Ukuran</label>
                                                      <input id="ukuran" type="number" data-trigger="click" data-content="Pilih Jenis Ukuran" data-placement="top" data-toggle="popover" class="form-control popovers"  style="width: 60%" disabled>
                                                    <select id="MySelect1" class="form-control" style="width: 20%" disabled>
                                                        <option>Pilih</option>
                                                        <option>Gr</option>
                                                        <option>Kg</option>
                                                    </select>
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Jenis</label>
                                                   <select id="MySelect3" class="form-control" style="width: 80%" disabled>
                                                        <option>Pilih</option>
                                                        <option value="Kucing">Kucing</option>
                                                        <option value="Anjing">Anjing</option>
                                                        <option value="Burung">Burung</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                                                     <input id="jml2" type="number" data-trigger="click" data-placement="top" data-toggle="popover" class="form-control popovers"  style="width: 60%" onfocus="myFunction5()" oninput="myFunction5()" >
                                                    <select id="MySelect2" class="form-control" style="width: 20%" disabled>
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
                                                    <input id="hrg2" type="number" class="form-control" id="inputPassword4" style="width: 80%" disabled>
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-inline" role="form">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Total</label>
                                                    <input id="total2" type="number" class="form-control" id="inputPassword4" style="width: 80%" onclick="myFunction4()" onfocus="myFunction4()" disabled>
                                                  
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
                 
                    <th>Id Transaksi</th>
                    <th>Id Pegawai</th>
                    <th>Pembelian</th>
                    <th>Penjualan</th>
                    <th>Saldo</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td id="idbrg" value="PJ10001">PJ10001</td>
                    <td>PG10001</td>
                    <td>Rp 0</td>
                    <td class="center">Rp 110,000</td>
                    <td>Rp 110,000</td>                       
                      <td align="center"> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td id="idbrg" value="PJ10002">PJ10002</td>
                    <td>PG10001</td>
                    <td>Rp 0</td>
                    <td class="center">Rp 160,000</td>
                    <td>Rp 270,000</td>                        
                      <td align="center">
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td id="idbrg" value="PJ10003">PJ10003</td>
                    <td>PG10001</td>
                    <td>Rp 0</td>
                    <td class="center">Rp 140,000</td>
                    <td>Rp 410,000</td>                        
                      <td align="center">
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td id="idbrg" value="PJ10004">PJ10004</td>
                    <td>PG10001</td>
                    <td>Rp 0 </td>
                    <td class="center">Rp 100,000</td>
                    <td>Rp 510,000</td>                        
                      <td align="center">
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
                 <tr class="">
                    <td>PJB10001</td>
                    <td>PG10002</td>
                    <td>Rp 100,000</td>
                    <td class="center">Rp 0</td>
                    <td>Rp 410,000</td>                        
                     <td align="center"> 
                   <button class="btn btn-danger" type="button" onclick="func1()">Delete</button></td>
                </tr>
               
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
function myFunction3() {
    var x = document.getElementById("mySelect5").value;
    var res = x.split(",")
    
    document.getElementById("vle").value = res[0];
    document.getElementById("hrg").value =res[1];
    document.getElementById("ukrn").value =res[2];
    document.getElementById("jns").value =res[3];
    document.getElementById("stck").value =res[4];
    document.getElementById("jns2").value =res[5];
}
function myFunction4(){
    var x = document.getElementById("jml").value;
    var y = document.getElementById("hrg").value;
    var tot;
    tot = x * y;
    document.getElementById("total").value = tot;
}
function myFunction5(){
    var x = document.getElementById("jml2").value;
    var y = document.getElementById("hrg2").value;
    var tot;
    tot = x * y;
    document.getElementById("total2").value = tot;
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