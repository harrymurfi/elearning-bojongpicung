<div class="panel panel-default" style="background-color: LavenderBlush; border: 1px solid lavender;">
  <div class="panel-heading text-center" style="height: 30px;"><strong>Login</strong></div>
  <div class="panel-body" style="height: 250px;">
    <form class="navbar" method="post" action="/includes/verification.php">
      <div class="form-group">
        <label class="sr-only" for="identity">Username or Email</label>
        <input class="form-control" type="text"name="identification" placeholder="Username or Email ..." required> 
      </div>
      <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Password ..." required>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="rememberme"> Remember Me</label>
      </div>
      <input class="btn btn-primary btn-block" type="submit" name="submit" value="Sign In"/>
      <button class="btn btn-success btn-block" type="button" onclick="">Sign Up</button>
      <button class="btn btn-link" type="button" onclick="">Forget Password ?</button>
    </form>
  </div>
</div>  