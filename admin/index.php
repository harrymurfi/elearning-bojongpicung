<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'\include.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <title>Admin</title>
  <?php
    include_title();
  ?>
  </head>
<body>
<h4>Welcome, <?php echo $_SESSION['logon_admin']; ?></h4>
<button onclick="logout('admin')">Logout</button>      
</body>
</html>
