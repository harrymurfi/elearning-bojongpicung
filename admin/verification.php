<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'\include.php';  

  if(isset($_POST['submit'])) {
    $identification = $_POST['identification'];
    $password = $_POST['password'];
    $mysqli = connect_db();
    $res = $mysqli->query("SELECT * FROM admin");
    $found = FALSE;
    foreach($res as $row) {
      if($row['username'] == $identification && $row['password']) {
        $identification = $row['username'];
        $found = TRUE;
        break;
      }
    }

    $res->close();
    $mysqli->close();

    if($found) {
      echo "found";
      if(!isset($_SESSION['logon_admin'])) {
        echo "starting new session";
        session_start();
        $_SESSION['logon_admin'] = $identification;
        header('Location: /admin/index.php');
        die();
      }
    }
    header('Location: /admin/login.php');
  }