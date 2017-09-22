<?php
  // Main Index
  require_once $_SERVER['DOCUMENT_ROOT'].'/main.php';
  if(is_logon()) {
    if($_SESSION['active_user_role'] == 'admin') {
      header('location: /admin/home.php');
      die();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>SMKN 1 Bojong Picung</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/shared/css/site.css"/>
</head>
<body>
<div class="container" id="pre_header" style="height: 21px; color: SlateGray ">
  <div class="row margin-top-10 visible-lg">
    <div class="col-md-6">
        <p><em>Site under construction</em></p>
    </div>
    <div class="col-md-6 text-right">
        <p><strong>Version: </strong> v1.0-beta</p>
    </div>
  </div>
</div>
<div class="container primary-container" style="min-height: 500px;">
  <!-- Header -->
  <div class="container-fluid" id="header_main" style="min-height: 75px; color: SlateGray; font-family: 'Times New Roman';">
    <h1>E-learning SMKN 1 Bojong Picung</h1>
  </div>
  <!-- Main Content -->
  <div class="container-fluid" style="border: 1px solid gainsboro; min-height: 675px;">
    <!-- header -->
    <div class="row" style="height: 30px; border: 1px solid gainsboro; padding: 5px">
      <div class="col-md-12">
        <p class="">
          <?php
            $welcome = is_logon() ? "Welcome, ".$_SESSION['active_user']."." : "You're not login yet.";
            echo $welcome;
          ?>
        </p>
      </div>
    </div>

    <!-- navigation menu -->
    <div class="row" style="width: fill-available; min-height: 50px; border: 1px solid gainsboro; font-family: Arial;">
      <div class="col-sm-12" style="background-color: steelblue; margin: auto;">
        <ul id="main-nav" class="nav navbar-nav nav-pills" data-spy="affix" data-offset="130" style="background-color: steelblue;">
          <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Beranda</button></li>
          <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Pesan</button></li>
          <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Forum</button></li>
        </ul> 
      </div>
    </div>

    <!-- main content -->
    <div class="row" style="min-height: 50px; padding: 5px">
      <!-- left sidebar -->
      <div class="col-sm-2" id="sidebar-left" style="min-height: 250px; padding-left: 0;">
        <div class="panel-group affix-top" id="accordion" data-spy="affix" data-offset-top="130" style="width: 180px;">
          <!-- Login -->
          <?php
            if(is_logon()) include_once('/includes/user-profile.php');
            else include_once('/includes/login.php');
          ?>
          <!-- Login -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#daftar_siswa">Daftar Siswa</a>
              </h4>
            </div>
            <div id="daftar_siswa" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Data Kecamatan</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Data Kota</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Data Provinsi</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Data Jasa Pengiriman</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Data Jenis Pengiriman</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Data Ongkos Kirim</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Backup And Restore</button></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#manajemen-laporan">Daftar Guru</a>
              </h4>
            </div>
            <div id="manajemen-laporan" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Data Laporan</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Cetak Laporan</button></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#manajemen-transaksi">Daftar Materi</a>
              </h4>
            </div>
            <div id="manajemen-transaksi" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Data Pesanan</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Data Pembayaran</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Data Pengiriman</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Data Retur</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Statistik Produk</button></li>
                  <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn">Statistik Member</button></li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <!-- right content-->
      <div class="col-sm-10" id="sidebar-right" style="min-height: 480px; border: 1px solid gainsboro; border-radius: 4px">
        <div id="content-loading-data" class="centralized" style="display: none">
          <img src="/images/loader-fb.gif" alt="loading"/>
        </div>
        <div id="content-data" style="display: none">
        </div>
        <div id="content-add">
          <div id="content-loading-add" class="text-center" style="display: none">
            <img src="/images/loader-fb.gif" alt="loading"/>
          </div>
          <div id="content-add-data"></div>
        </div>
        <blockquote id="content-message" style="display: none"></blockquote>
      </div>
    </div>
  </div> 
  <!-- End primary container -->
</div>
<div class="container text-center" id="footer" style="min-height: 100px; color: SlateGray ">
  <h4>&copy 2017. Hak cipta dilindungi.</h4>
</div>
  
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/shared/js/script.js"></script>
<!-- end Script -->       
</body>
</html>