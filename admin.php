<?php
  session_start();
  if(!isset($_SESSION['logon_admin'])) {
    header('Location: /admin/login.php');
    die();
  }
  else {
    header('Location: /admin/index.php');
    die();
  }
