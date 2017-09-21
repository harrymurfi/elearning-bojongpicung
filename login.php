<?php
  // main login
  require_once $_SERVER['DOCUMENT_ROOT'].'\include.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <title>Login</title>
  <?php
    include_title();
  ?>
</head>
<body>
<div class="panel panel-default" style="background-color: LavenderBlush; border: 1px solid lavender; margin-top: 10px">
  <div class="panel-heading text-center"><h4>Login User</h4></div>
  <div class="panel-body">
      <form class="navbar" method="post" action="~/Contents/loginVerification.cshtml">
          <div class="form-group">
              <label class="sr-only" for="identity">Username or Email</label>
              <input class="form-control" type="text" id="identity" name="identity" placeholder="Username or Email ..." required> 
          </div>
          <div class="form-group">
              <label class="sr-only" for="password">Password</label>
              <input class="form-control" type="password" id="password" name="password" placeholder="Password ..." required>
          </div>
          <div class="checkbox">
              <label><input type="checkbox" name="rememberme"> Remember Me</label>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Sign In"/>
          <button class="btn btn-success btn-block" type="button" onclick="">Sign Up</button>
          <button class="btn btn-link" type="button" onclick="">Forget Password ?</button>
      </form>
  </div>
</div>    
</body>
</html>
