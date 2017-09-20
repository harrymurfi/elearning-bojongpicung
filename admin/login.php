<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'\include.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <title>Login Admin</title>
  <?php
    include_title();
  ?>
</head>
<body>
  <form method="post" action="verification.php">
    <h4>Authorized Login</h4>
    <input type="text" name="identification" required/>
    <input type="password" name="password" required/>
    <input type="submit" name="submit" value="Login"/>
  </form>     
</body>
</html>
