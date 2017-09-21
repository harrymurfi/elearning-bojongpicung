<?php
  session_start();

  function include_title() {
    require_once '/shared/resources.html';
  }

  function is_logon() {
    return isset($_SESSION['active_user']);
  }

  function connect_db() {
    $mysqli = new mysqli('localhost', 'root', 'root', 'akademik');
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
  }

  function id_check($mysqli, $id, $password) {
    global $found_user, $found_user_role;
    // check id from admin
    if(!$found_user) {
      $query = "select username from admin where (username=? or email=?) and password=?";
      if($mysqli_stmt = $mysqli->prepare($query)) {
        $mysqli_stmt->bind_param("sss", $id, $id, $password);
        $mysqli_stmt->execute();
        $mysqli_stmt->bind_result($fusername);
        if($mysqli_stmt->fetch()) {
          $found_user = $fusername;
          $found_user_role = "admin";
        }
      }
    }
    // check id from guru
    if(!$found_user) {
      $query = "select nama_guru from guru where (id_guru=? or email=?) and password=?";
      if($mysqli_stmt = $mysqli->prepare($query)) {
        $mysqli_stmt->bind_param("sss", $id, $id, $password);
        $mysqli_stmt->execute();
        $mysqli_stmt->bind_result($fusername);
        if($mysqli_stmt->fetch()) {
          $found_user = $fusername;
          $found_user_role = "guru";
        }
      }
    }
    if(!$found_user) {
      $query = "select nama_siswa from siswa where (nis=? or email=?) and password=?";
      if($mysqli_stmt = $mysqli->prepare($query)) {
        $mysqli_stmt->bind_param("sss", $id, $id, $password);
        $mysqli_stmt->execute();
        $mysqli_stmt->bind_result($fusername);
        if($mysqli_stmt->fetch()) {
          $found_user = $fusername;
          $found_user_role = "siswa";
        }
      }
    }
  }

  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }