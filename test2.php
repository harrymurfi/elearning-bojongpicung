<?php
  echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Test Form</title>
</head>
<body>
<div class="panel panel-default" style="background-color: LavenderBlush; border: 1px solid lavender;">
  <div class="panel-heading text-center" style="height: 30px;"><strong>Login</strong></div>
  <div class="panel-body" style="height: 250px;">
    <form class="navbar" method="post" action="/includes/tmp.php">
      <div class="form-group">
        <label class="sr-only" for="identity">Username or Email</label>
        <input class="form-control" type="text"name="identification" required> 
      </div>
      <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input class="form-control" type="password" name="password" required>
      </div>
      <input class="btn btn-primary btn-block" type="submit" name="submit" value="Sign In"/>
      <button class="btn btn-success btn-block" type="button" onclick="">Sign Up</button>
      <button class="btn btn-link" type="button" onclick="">Forget Password ?</button>
    </form>
  </div>
</div>          
</body>
</html>
