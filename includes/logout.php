<?php
  session_start();
  session_unset();
  session_destroy();
  if($_SERVER['QUERY_STRING'] == 'admin') {
    header('Location: /admin/index.php');
    die();
  }
