<?php
  $mysqli = new mysqli("localhost", "root", "root", "akademik");
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
  echo "Successfully connect. <br>";

  if($mysqli_stmt = $mysqli->prepare("select * from admin where username=? or email=? and password=?")) {
    echo "prepare completed. <br>";
    $mysqli_stmt->bind_param("sss", $id, $id, $password);
    $id = "admin";
    $password = "admin";
    echo "bind param completed. <br>";
    $mysqli_stmt->execute();
    echo "execute completed. <br>";
    $mysqli_stmt->fetch();
    echo "fetch completed. <br>";
  }
  /*
  $result = $mysqli->query("select * from admin where username='admin@gmail.com' or email='admin@gmail.com' and password='admin';");
  if($result) {
    echo "result found. <br>";
    $row = $result->fetch_object();
    echo $row->username."<br>";
    echo $row->email."<br>";
  }
  else {
    echo 'not found.';
  }*/
?>
