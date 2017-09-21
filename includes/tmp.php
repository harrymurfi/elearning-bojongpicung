<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/main.php';
  
  if(!is_logon()) {
    if(isset($_POST['submit'])) {
      $identification = $_POST['identification'];
      $password = $_POST['password'];
      $mysqli = connect_db();
      $found_user;
      $found_user_role; 
      id_check($mysqli, $identification, $password);
      if($found_user && $found_user_role) echo $found_user." youre login as ".$found_user_role;
      else echo "no user found";
    }
  }
  header('Location: /index.php');