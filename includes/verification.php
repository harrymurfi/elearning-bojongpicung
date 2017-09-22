<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/main.php';
  
  if(!is_logon()) {
    if(isset($_POST['submit'])) {
      $identification = $_POST['identification'];
      $password = $_POST['password'];
      $mysqli = connect_db();
      id_check($mysqli, $identification, $password); // out $found_user, $found_user_role
      if($found_user && $found_user_role) {
        $_SESSION['active_user'] = $found_user;
        $_SESSION['active_user_role'] = $found_user_role;
      }
    }
  }
  header('Location: /');