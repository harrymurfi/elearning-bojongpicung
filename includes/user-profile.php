<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#profil_user">Profil User</a>
    </h4>
  </div>
  <div id="profil_user" class="panel-collapse collapse in">
    <div class="panel-body">
      <?php
        if(is_logon()) {
          echo "<p> Welcome ".$_SESSION['active_user']."</p>";
          echo "<p> You're login as ".$_SESSION['active_user_role']."</p>";
        }
      ?>
      <ul class="nav nav-pills nav-stacked">
        <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Ubah Password</button></li>
        <li><button type="button" class="btn btn-default btn-block btn-sm navbar-btn" onclick="selectData(this.innerHTML)">Ubah Foto</button></li>
        <li><a href="/includes/logout.php">Logout</a></li>
      </ul> 
    </div>
  </div>
</div>
