<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/main.php';
  if(!is_logon() || $_SESSION['active_user_role'] != 'admin') {
    header('location: /');
    die();
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/shared/js/script.js"></script>
</head>
<body>
<div class="container-fluid primary-container">
  <div class="row" id="header">
    <h1>ADMIN</h1>
  </div>

  <div class="row" id="top-nav">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">E-learning</a>
        </div>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#beranda">Beranda</a></li>
          <li><a data-toggle="tab" href="#user-profil">Profil-user</a></li>
        </ul>
      </div>
    </nav> 
  </div>

  <!-- Tab content for nav-->
  <div class="row" id="body-content" style="min-height: 420px;">
    <div class="tab-content">
      <div id="beranda" class="tab-pane fade in active">
        <div class="row">
          <div class="col-sm-2" id="beranda-left">
            <div class="panel panel-default">
              <div class="panel-heading">Pengolahan</div>
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="javascript:void(0)">Data Guru</a></li>
                  <li><a href="javascript:void(0)">Data Siswa</a></li>
                  <li><a href="javascript:void(0)">Data Kelas</a></li>
                  <li><a href="javascript:void(0)">Data Mata Pelajaran</a></li>
                  <li><a href="javascript:void(0)">Data Mengajar</a></li>
                  <li><a href="javascript:void(0)">Data Tahun Ajaran</a></li>
                </ul>
              </div>
            </div> 
          </div>
          <div class="col-sm-10" id="beranda-right">
            <div class="panel panel-default">
              <div class="panel-heading">Data</div>
              <div class="panel-body" id="beranda-right-body">
                <p>adsdfasdfasd</p>
              </div>  
            </div>
          </div>
        </div>
      </div>
      <div id="user-profil" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-3" id="beranda-left">
            <div class="panel panel-default">
              <div class="panel-heading">Pengaturan</div>
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#">Ubah Password</a></li>
                  <li><a href="javascript:void(0)">Ubah Foto</a></li>
                </ul>
              </div>
            </div> 
          </div>
          <div class="col-sm-9" id="beranda-right">
            <div class="panel panel-default">
              <div class="panel-heading">User Action</div>
              <div class="panel-body">
                <p>ubah password</p>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tab content for nav-->

  <div class="row" id="footer">
    <hr>
    <h4 class="text-center">admin &copy SMKN 1 Bojong Picung 2017. Hak-cipta dilindungi.</h4>
  </div>
</div>       
</body>
</html>
